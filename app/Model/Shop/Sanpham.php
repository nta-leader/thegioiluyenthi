<?php

namespace App\Model\Shop;

use Illuminate\Database\Eloquent\Model;
use DB;
class Sanpham extends Model
{
    protected $table="sanpham";
    protected $primaryKey="id_sp";
    public $timestamps=false;
    public function get_giamgia($soluong){
        return $this->where('active',1)
        ->where('giamgia','>',0)
        ->orderBy('id_sp','DESC')
        ->take($soluong)
        ->get()
        ->toArray();
    }
    public function get_giamgia_random($soluong){
        return $this->where('active',1)
        ->where('giamgia','>',0)
        ->orderBy('id_sp','DESC')
        ->inRandomOrder()
        ->take($soluong)
        ->get()
        ->toArray();
    }
    public function get_muanhieu($soluong){
    	return $this->where('active',1)->orderBy('daban','DESC')->take($soluong)->get()->toArray();
    }
    public function getList($arItem,$soluong){
        return DB::table('sanpham as sp')
        ->join('cat as c','sp.id_cat','=','c.id_cat')
        ->where('active',1)
        ->whereIn('sp.id_cat',$arItem)
        ->orderBy('id_sp','DESC')
        ->take($soluong)
        ->get()
        ->toArray();
    }
    public function getList_cat($arItem,$sapxep){
        if($sapxep=='spm-spc'){
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where('active',1)->whereIn('sp.id_cat',$arItem)
            ->orderBy('sp.id_sp','DESC')
            ->paginate(20);
        }elseif($sapxep=='spc-spm'){
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where('active',1)->whereIn('sp.id_cat',$arItem)
            ->orderBy('sp.id_sp','ASC')
            ->paginate(20);
        }elseif($sapxep=='gc-gt'){
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where('active',1)->whereIn('sp.id_cat',$arItem)
            ->select("sp.*",DB::raw('gia*(100-giamgia)/100 as giaban'))
            ->orderBy('giaban','DESC')
            ->paginate(20);
        }elseif($sapxep=='gt-gc'){
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where('active',1)->whereIn('sp.id_cat',$arItem)
            ->select("sp.*",DB::raw('gia*(100-giamgia)/100 as giaban'))
            ->orderBy('giaban','ASC')
            ->paginate(20);
        }elseif($sapxep=='ggc-ggt'){
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where('active',1)->whereIn('sp.id_cat',$arItem)
            ->orderBy('sp.giamgia','DESC')
            ->paginate(20);
        }else{
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where('active',1)->whereIn('sp.id_cat',$arItem)
            ->orderBy('sp.giamgia','ASC')
            ->paginate(20);
        }
        
    }
    public function getItem($id){
        return $this->findOrFail($id);
    }
    public function getDexuat($id){
        $id_cat=($this->getItem($id))->id_cat;
        return $this->where('active',1)->where('id_cat',$id_cat)->where('id_sp','!=',$id)->inRandomOrder()->take(20)->get();
    }
    public function timkiem($id,$key,$sapxep){
        if($id == 0){
            if($sapxep=='spm-spc'){
                return $this->where('active',1)
                ->where('namesp','like','%'.$key.'%')
                ->orderBy('id_sp','DESC')
                ->paginate(20);
            }elseif($sapxep=='spc-spm'){
                return $this->where('active',1)
                ->where('namesp','like','%'.$key.'%')
                ->orderBy('id_sp','ASC')
                ->paginate(20);
            }elseif($sapxep=='gc-gt'){
                return $this->where('active',1)
                ->where('namesp','like','%'.$key.'%')
                ->select("*",DB::raw('gia*(100-giamgia)/100 as giaban'))
                ->orderBy('giaban','DESC')
                ->paginate(20);
            }elseif($sapxep=='gt-gc'){
                return $this->where('active',1)
                ->where('namesp','like','%'.$key.'%')
                ->select("*",DB::raw('gia*(100-giamgia)/100 as giaban'))
                ->orderBy('giaban','ASC')
                ->paginate(20);
            }elseif($sapxep=='ggc-ggt'){
                return $this->where('active',1)
                ->where('namesp','like','%'.$key.'%')
                ->orderBy('giamgia','DESC')
                ->paginate(20);
            }else{
                return $this->where('active',1)
                ->where('namesp','like','%'.$key.'%')
                ->orderBy('giamgia','ASC')
                ->paginate(20);
            }
        }
        return $this->where('active',1)
            ->whereIn('id_cat',$id)
            ->where('namesp','like','%'.$key.'%')
            ->orderBy('id_sp','DESC')
            ->paginate(20);
    }
    public function muanhieu_all(){
        return $this->where('active',1)->orderBy('daban','DESC')->paginate(20);
    }
    public function giamgia_all(){
        return $this->where('active',1)->orderBy('giamgia','DESC')->paginate(20);
    }
}
