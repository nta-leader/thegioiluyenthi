<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SlideSanphamController extends Controller
{
    public function index($name,$name_su_kien){
        $objItem=DB::table("slide")->where("code",$name_su_kien)->select('id_slide','name as name_sukien')->first();
        $objItem->url=route('admin.slidesanpham.view',['name'=>$name,'name_su_kien'=>$name_su_kien,'id'=>$objItem->id_slide]);
        $objItem->name=$name;
        $objItem->name_su_kien=$name;
        $objItem->addUrl=route('admin.slidesanpham.add',['name'=>$name,'name_su_kien'=>$name_su_kien,'id'=>$objItem->id_slide]);
        return view('admin.slide.sanpham.index',compact('objItem'));
    }
    public function view($name,$name_su_kien,$id,Request $req){
        //ten o day phai trung voi cac ten o database
    	$columns = [
    		0 => "ma_sp",
    		1 => "namesp",
            2 => "picture",
            3 => "gia",
            4 => "giamgia",
            5 => "chiase",
            6 => "code"
    	];

    	$totalData = DB::table("slide_sp")->where("id_slide",$id)->count();
    	$limit = $req->input('length');
    	$start = $req->input('start');
    	$order = $columns[$req->input("order.0.column")];
    	$dir   = $req->input("order.0.dir");

    	if( empty( $req->input('search.value') ) ){
            $posts = DB::table("slide_sp as ssp")
            ->join('sanpham as sp','ssp.id_sp','=','sp.id_sp')
            ->select('ssp.id','sp.id_sp','sp.ma_sp','sp.namesp','sp.picture','sp.gia','sp.giamgia','sp.chiase')
            ->where('ssp.id_slide',$id)
	    	->offset($start)
	    	->limit($limit)
	    	->orderBy($order,$dir)
	    	->get();

	    	$totalFiltered = $totalData;
    	}else{
    		$posts = DB::table("slide_sp as ssp")
            ->join('sanpham as sp','ssp.id_sp','=','sp.id_sp')
            ->select('ssp.id','sp.id_sp','sp.ma_sp','sp.namesp','sp.picture','sp.gia','sp.giamgia','sp.chiase')
    		->where([
                ['ssp.id_slide',$id],
                ["sp.ma_sp","like","%{$req->input('search.value')}%"]
            ])
            ->orWhere([
                ['ssp.id_slide',$id],
                ["sp.namesp","like","%{$req->input('search.value')}%"]
            ])
	    	->offset($start)
	    	->limit($limit)
	    	->orderBy($order,$dir)
	    	->get();

	    	$totalFiltered = DB::table("slide_sp as ssp")
            ->join('sanpham as sp','ssp.id_sp','=','sp.id_sp')
    		->where([
                ['ssp.id_slide',$id],
                ["sp.ma_sp","like","%{$req->input('search.value')}%"]
            ])
            ->orWhere([
                ['ssp.id_slide',$id],
                ["sp.namesp","like","%{$req->input('search.value')}%"]
            ])
	    	->count();
    	}
    
    	$data = array();
    	if($posts){
    		foreach ($posts as $r) {
    			//ten o day phai trung vs ten o table "<th>"
    			$nestedData['ma_sp'] = $r->ma_sp;
    			$nestedData['namesp'] = $r->namesp;
                $nestedData['picture'] = "<img style='width:100px;' src='/storage/app/files/{$r->picture}'>";
                $nestedData['gia'] = number_format($r->gia,0).'đ';
                $nestedData['giamgia'] = $r->giamgia.'%';
                $nestedData['chiase'] = $r->chiase.'%';
                $urlDel="'".route('admin.slidesanpham.del',['id'=>$r->id_sp])."'";
                $nestedData['code'] = '<a onclick="del('.$urlDel.')" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>';
    			$data[] = $nestedData;
    		}
    	}
    	$json_data = [
    		"draw"=>intval($req->input('draw')),
    		"recordsTotal"=>intval($totalData),
    		"recordsFiltered"=>intval($totalFiltered),
    		"data"=>$data
    	];
    	echo json_encode($json_data);
    }
    public function add($name,$name_su_kien,$id){
        $objHinhthuc=DB::table('hinhthuc')->get();
        return view('admin.slide.sanpham.add',compact('id','objHinhthuc'));
    }
    public function postAdd($id_slide,Request $req){
        $this->validate($req, [
                'id_cat' => 'required',
                'chon' => 'required'
            ],
            [
                'id_cat.required'=>'Vui lòng chọn loại sản phẩm !',
                'chon.required'=>'Vui lòng chọn sản phẩm !'
            ]
        );
        $id_hinhthuc=$req->hinhthuc;
        $arId=$req->chon;
        if($id_hinhthuc==1){
            foreach($arId as $id_sp){
                $count=DB::table("slide_sp")->where([
                    ['id_hinhthuc',$id_hinhthuc],
                    ['id_slide',$id_slide],
                    ['id_sp',$id_sp]
                ])
                ->count();
                if($count==0){
                    DB::table("slide_sp")->insert(['id_hinhthuc'=>$id_hinhthuc,'id_slide'=>$id_slide,'id_sp'=>$id_sp]);
                }
            }
            return redirect()->back()->with(['msg'=>'Thêm Thành công !']);
        }
        $objItems=DB::table("sanpham")->whereIn("id_sp",$arId)->where("slide",0)->get();
        $objSlide=DB::table("slide")->where('id_slide',$id_slide)->first();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_start=strtotime($objSlide->start);
        $date_finish=strtotime($objSlide->finish);
        foreach($objItems as $item){
            $giamgia=number_format((($item->gia - $req->gia)/$item->gia)*100,0);
            if($giamgia < 0){ continue; }
            if($id_hinhthuc==2){
                $arItem=[
                    'ma_sp'=>$item->ma_sp,
                    'namesp'=>$item->namesp,
                    'id_cat'=>$item->id_cat,
                    'gia'=>$item->gia,
                    'chiase'=>$req->chiase,
                    'giamgia'=>$giamgia,
                    'picture'=>$item->picture,
                    'date'=>$item->date,
                    'preview_text'=>$item->preview_text,
                    'detail_text'=>$item->detail_text,
                    'count_number'=>0,
                    'active'=>1,
                    'daban'=>0,
                    'slide'=>1,
                    'date_start'=>$date_start,
                    'date_finish'=>$date_finish
                ];
                $id_sp=DB::table("sanpham")->insertGetId($arItem);
                DB::table("slide_sp")->insert(['id_hinhthuc'=>$id_hinhthuc,'id_slide'=>$id_slide,'id_sp'=>$id_sp]);
            }elseif($id_hinhthuc==3){
                $arItem=[
                    'ma_sp'=>$item->ma_sp,
                    'namesp'=>$item->name,
                    'id_cat'=>$item->id_cat,
                    'gia'=>$item->gia,
                    'chiase'=>$req->chiase,
                    'giamgia'=>$req->giamgia,
                    'picture'=>$item->picture,
                    'date'=>$item->date,
                    'preview_text'=>$item->preview_text,
                    'detail_text'=>$item->detail_text,
                    'count_number'=>0,
                    'active'=>1,
                    'daban'=>0,
                    'slide'=>1,
                    'date_start'=>$date_start,
                    'date_finish'=>$date_finish
                ];
                $arIdSP[]=DB::table("sanpham")->insertGetId($arItem);
                DB::table("slide_sp")->insert(['id_hinhthuc'=>$id_hinhthuc,'id_slide'=>$id_slide,'id_sp'=>$id_sp]);
            }
        }
        return redirect()->back()->with(['msg'=>'Thêm Thành công !']);
    }
    public function del($id_sp){
        $objSlide=DB::table("slide_sp")->where('id_sp',$id_sp)->first();
        if($objSlide->id_hinhthuc != 1){
            DB::table("sanpham")->where('id_sp',$id_sp)->delete();
        }
        DB::table("slide_sp")->where('id_sp',$id_sp)->delete();
        return redirect()->back()->with(['msg'=>'Xóa Thành công !']);
    }
    public function listsp(Request $req){
        $id_cat=$req->id_cat;
        if($id_cat==0){
            $objItems = DB::table("sanpham as sp")
            ->join("cat as c","sp.id_cat","=","c.id_cat")
            ->where("sp.slide",0)
            ->where("sp.active",1)
            ->select("sp.id_sp","sp.ma_sp","sp.namesp","sp.gia","sp.giamgia","sp.chiase","sp.picture","c.namecat")
            ->get();
        }else{
            $data=DB::table("cat")->orderBy("parent_id","ASC")->get();
            $arId=[0=>$id_cat];
            getId($data,$id_cat,$arId);
            $arId=$req->session()->get('arId');
            $objItems = DB::table("sanpham as sp")
            ->join("cat as c","sp.id_cat","=","c.id_cat")
            ->where("sp.slide",0)
            ->where("sp.active",1)
            ->whereIn("sp.id_cat",$arId)
            ->select("sp.id_sp","sp.ma_sp","sp.namesp","sp.gia","sp.giamgia","sp.chiase","sp.picture","c.namecat")
            ->get();
        }
        return view('admin.slide.sanpham.listsp',compact('objItems'));
    }
    public function hinhthuc(Request $req){
        $id=$req->id;
        switch ($id) {
            case "1":
                return view("admin.slide.sanpham.hinhthuc.macdinh");
                break;
            case "2":
                return view("admin.slide.sanpham.hinhthuc.donggia_gia");
                break;
            case "3":
                return view("admin.slide.sanpham.hinhthuc.donggia_giamgia");
                break;
        }
    }
}
