<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Model\Admin\Anh;
use App\Model\Admin\Comment;
class Sanpham extends Model
{
    protected $table="sanpham";
    protected $primaryKey="id_sp";
    public $timestamps=false;
    public function getList(){
    	return DB::table('sanpham as sp')->join('cat as c','sp.id_cat','=','c.id_cat')->where('sp.slide',0)->orderBy('sp.id_sp','DESC')->paginate(10);
    }
    public function getList2($parent_id,$arItem){
    	return DB::table('sanpham as sp')->join('cat as c','sp.id_cat','=','c.id_cat')->whereIn('sp.id_cat',$arItem)->where('sp.slide',0)->orderBy('sp.id_sp','DESC')->paginate(10);
    }
    public function add($arItem){
    	return $this->insertGetId($arItem);
    }
    public function del_cat($id){
        $objItems=$this->where('id_cat',$id)->get();
        foreach ($objItems as $key => $value) {
            $id_sp=$value->id_sp;
            $this->del($id_sp);
        }
    }
    public function edit($id,$arItem){
        return $this->where('id_sp',$id)->update($arItem);
    }
    public function del($id){
        $objItem=$this->getItem($id);
        if(Storage::exists('files/'.$objItem->picture)){
            Storage::delete('files/'.$objItem->picture);
        }
        $anh=new Anh();
        $anh->del2($id);
        $comment=new Comment();
        $comment->del_sp($id);
        return $this->where('id_sp',$id)->delete();
    }
    public function getItem($id){
    	return $this->findOrFail($id);
    }
    public function getItem_gh($id){
        return $this->select('id_sp','id_cat','namesp','picture','gia','heso_tt','giamgia')->where('id_sp',$id)->get()->toArray();
    }
    public function check($id,$name){
        return $this->where('id_sp','!=',$id)->where('namesp',$name)->count();
    }
    public function timkiem($key){
        return DB::table('sanpham as sp')
        ->join('cat as c','sp.id_cat','=','c.id_cat')
        ->where('sp.namesp','like','%'.$key.'%')
        ->where('sp.slide',0)
        ->orderBy('sp.id_sp','DESC')
        ->get();
    }
    public function timkiem2($arItem,$key){
        return DB::table('sanpham as sp')
        ->join('cat as c','sp.id_cat','=','c.id_cat')
        ->whereIn('sp.id_cat',$arItem)
        ->where('sp.namesp','like','%'.$key.'%')
        ->where('sp.slide',0)
        ->orderBy('sp.id_sp','DESC')
        ->get();
    }
    //check id_cat khi xóa có bao nhiêu sp
    public function getList_cat($arItem){
        return $this->whereIn('id_cat',$arItem)->count();
    }
}
