<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Sanpham;
use App\Model\Admin\Slide;
use App\Http\Requests\addSlide;
use App\Http\Requests\editSlide;
use DB;
use Storage;

class SlideController extends Controller
{
    public function __construct(Slide $slide){
        $this->slide=$slide;
    }
    public function index($name,Sanpham $sanpham){
        $objItem=DB::table('type_slide')->where('code',$name)->first();
        if($objItem == null){
            return redirect()->back();
        }
        $objItem->url=route('admin.slide.view',['id'=>$objItem->id]);
        $objItem->addUrl=route('admin.slide.add',['name'=>$name]);
    	return view('admin.slide.index',compact('objItem'));
    }
    public function view($id,Request $req){
        //ten o day phai trung voi cac ten o database
    	$columns = [
    		0 => "id_slide",
    		1 => "name",
            2 => "start",
            3 => "finish",
            4 => "picture",
            5 => "active",
            6 => "code"
    	];

    	$totalData = DB::table("slide")->where("id_type",$id)->count();
    	$limit = $req->input('length');
    	$start = $req->input('start');
    	$order = $columns[$req->input("order.0.column")];
    	$dir   = $req->input("order.0.dir");

    	if( empty( $req->input('search.value') ) ){
            $posts = DB::table("slide")
            ->where("id_type",$id)
	    	->offset($start)
	    	->limit($limit)
	    	->orderBy($order,$dir)
	    	->get();

	    	$totalFiltered = $totalData;
    	}else{
    		$posts = DB::table("slide")
    		->where([
                ["id_type",$id],
                ["id_slide","like","%{$req->input('search.value')}%"]
            ])
            ->orWhere([
                ["id_type",$id],
                ["name","like","%{$req->input('search.value')}%"]
            ])
            ->orWhere([
                ["id_type",$id],
                ["start","like","%{$req->input('search.value')}%"]
            ])
            ->orWhere([
                ["id_type",$id],
                ["finish","like","%{$req->input('search.value')}%"]
            ])
	    	->offset($start)
	    	->limit($limit)
	    	->orderBy($order,$dir)
	    	->get();

	    	$totalFiltered = DB::table("slide")
    		->where([
                ["id_type",$id],
                ["id_slide","like","%{$req->input('search.value')}%"]
            ])
            ->orWhere([
                ["id_type",$id],
                ["name","like","%{$req->input('search.value')}%"]
            ])
            ->orWhere([
                ["id_type",$id],
                ["start","like","%{$req->input('search.value')}%"]
            ])
            ->orWhere([
                ["id_type",$id],
                ["finish","like","%{$req->input('search.value')}%"]
            ])
	    	->count();
    	}
    
    	$data = array();
    	if($posts){
            $arItem=[
                1=>"slide-chinh",
                2=>"left-slide",
                3=>"bottom-slide",
                4=>"tieu-bieu-slide"
            ];
    		foreach ($posts as $r) {
    			//ten o day phai trung vs ten o table "<th>"
    			$nestedData['id_slide'] = $r->id_slide;
                $nestedData['name'] = $r->name;
                if($r->url==null){
                    $nestedData['name'].="<br><a class='btn' href='".route('admin.slidesanpham.index',['name'=>$arItem[$r->id_type],'name_su_kien'=>$r->code])."'>Xem các sản phẩm</a>";
                }
                $nestedData['start'] = $r->start;
                $nestedData['finish'] = $r->finish;
                $nestedData['picture'] ="<img style='width:200px;' src='/storage/app/files/{$r->picture}'>";
                if($r->active==1){
                    $nestedData['active'] = "<span id='{$r->id_slide}'><a onclick='active(1,{$r->id_slide})' class='btn btn-primary'>Hiển Thị</a></span>";
                }else{
                    $nestedData['active'] = "<span id='{$r->id_slide}'><a onclick='active(0,{$r->id_slide})' class='btn btn-danger'>Đã ẩn</a></span>";
                }
                $nestedData['code'] = "<a href='".route('admin.slide.edit',['name'=>$arItem[$r->id_type],'id'=>$r->id_slide])."' class='btn btn-primary'><i class='fa fa-edit'></i> Sửa</a>
                <a onclick='del(".$r->id_slide.")' class='btn btn-danger'><i class='fa fa-pencil'></i> Xóa</a>";
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
    public function add($name){
        $arItem=[
            "slide-chinh"=>1,
            "left-slide"=>2,
            "bottom-slide"=>3,
            "tieu-bieu-slide"=>4
        ];
        $id=$arItem[$name];
        return view('admin.slide.add',compact('id'));
    }
    public function postAdd($id,addSlide $req){
        $picture=$req->file("picture")->store("files");
        $arP=explode("/",$picture);
        $picture=end($arP);
        $arItem=[
            "id_type"=>$id,
            "name"=>$req->name,
            "code"=>editString($req->name),
            "start"=>$req->start_day." ".$req->start_time,
            "finish"=>$req->finish_day." ".$req->finish_time,
            "picture"=>$picture,
            "content"=>$req->content,
            "url"=>$req->url,
            "active"=>1
        ];
        if($this->slide->add($arItem)){
            return redirect()->back()->with(['msg'=>'Thêm sự kiện thành công !']);
        }else{
            return redirect()->back()->with(['msg'=>'Có lỗi xảy ra !']);
        }
    }
    public function edit($name,$id){
        $objItem=$this->slide->getItem($id);
        return view('admin.slide.edit',compact('objItem'));
    }
    public function postEdit($id,editSlide $req){
        if($req->hasFile("new_picture")){
            if(Storage::exists("files/{$req->picture}")){
                Storage::delete("files/{$req->picture}");
            }
            $picture=$req->file("picture")->store("files");
            $arP=explode("/",$picture);
            $picture=end($arP);
        }else{
            $picture=$req->picture;
        }
        $start=$req->start_day." ".$req->start_time;
        $finish=$req->finish_day." ".$req->finish_time;
        $arItem=[
            "name"=>$req->name,
            "code"=>str_slug($req->name),
            "start"=>$start,
            "finish"=>$finish,
            "picture"=>$picture,
            "content"=>$req->content,
            "url"=>$req->url
        ];
        $this->slide->edit($id,$arItem);
        $objItems=DB::table("slide_sp")->where("id_slide",$id)->get();
        foreach($objItems as $item){
            if($item->id_hinhthuc==1){
                continue;
            }
            $arId[]=$item->id_sp;
        }
        if(isset($arId)){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date_start=strtotime($start);
            $date_finish=strtotime($finish);
            DB::table("sanpham")->whereIn('id_sp',$arId)->update(['date_start'=>$date_start,'date_finish'=>$date_finish]);
        }
        return redirect()->back()->with(['msg'=>'Sửa sự kiện thành công !']);
    }
    public function del($id){
        return redirect()->back()->with(['msg'=>'Xóa thành công !']);
    }
    public function active(Request $req){
        $active=$req->active;
        $id_slide=$req->id_slide;
        $objItems=DB::table("slide_sp")->where("id_slide",$id_slide)->get();
        foreach($objItems as $item){
            if($item->id_hinhthuc==1){
                continue;
            }
            $arId[]=$item->id_sp;
        }
        if($active==0){
            DB::table('slide')->where('id_slide',$id_slide)->update(['active'=>1]);
            if(isset($arId)){
                DB::table("sanpham")->whereIn('id_sp',$arId)->update(['active'=>1]);
            }
            return "<a onclick='active(1,{$id_slide})' class='btn btn-primary'>Hiển Thị</a>";
        }else{
            DB::table('slide')->where('id_slide',$id_slide)->update(['active'=>0]);
            if(isset($arId)){
                DB::table("sanpham")->whereIn('id_sp',$arId)->update(['active'=>0]);
            }
            return "<a onclick='active(0,{$id_slide})' class='btn btn-danger'>Đã ẩn</a>";
        }
    }
}
