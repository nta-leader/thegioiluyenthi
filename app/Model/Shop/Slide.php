<?php

namespace App\Model\Shop;

use Illuminate\Database\Eloquent\Model;
use DB;

class Slide extends Model
{
    protected $table="slide";
    protected $primarKey="id_slide";
    public $timestamps=false;

    public function chinh(){
        return $this->where("id_type",1)->where("active",1)->orderBy('id_slide','DESC')->get();
    }
    public function left(){
        return $this->where("id_type",2)->where("active",1)->inRandomOrder()->take(1)->get();
    }
    public function bottom(){
        return $this->where("id_type",3)->where("active",1)->inRandomOrder()->take(2)->get();
    }
    public function tieubieu(){
        return $this->where("id_type",4)->where("active",1)->inRandomOrder()->take(2)->get();
    }
    public function getItem($code){
        return $this->where("code",$code)->first();
    }
    public function getSlideSanpham($id_slide,$sapxep){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=time();
        if($sapxep=='spm-spc'){
            return DB::table("slide_sp as ssp")
            ->join("slide as s","ssp.id_slide","=","s.id_slide")
            ->join("sanpham as sp","ssp.id_sp","=","sp.id_sp")
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start","<=",$date],
                ["sp.date_finish",">=",$date]
            ])
            ->orWhere([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start",null],
                ["sp.date_finish",null]
            ])
            ->orderBy('sp.id_sp','DESC')
            ->paginate(20);
        }elseif($sapxep=='spc-spm'){
            return DB::table("slide_sp as ssp")
            ->join("slide as s","ssp.id_slide","=","s.id_slide")
            ->join("sanpham as sp","ssp.id_sp","=","sp.id_sp")
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start","<=",$date],
                ["sp.date_finish",">=",$date]
            ])
            ->orWhere([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start",null],
                ["sp.date_finish",null]
            ])
            ->orderBy('sp.id_sp','ASC')
            ->paginate(20);
        }elseif($sapxep=='gc-gt'){
            return DB::table("slide_sp as ssp")
            ->join("slide as s","ssp.id_slide","=","s.id_slide")
            ->join("sanpham as sp","ssp.id_sp","=","sp.id_sp")
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start","<=",$date],
                ["sp.date_finish",">=",$date]
            ])
            ->orWhere([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start",null],
                ["sp.date_finish",null]
            ])
            ->select("sp.*",DB::raw('gia*(100-giamgia)/100 as giaban'))
            ->orderBy('giaban','DESC')
            ->paginate(20);
        }elseif($sapxep=='gt-gc'){
            return DB::table("slide_sp as ssp")
            ->join("slide as s","ssp.id_slide","=","s.id_slide")
            ->join("sanpham as sp","ssp.id_sp","=","sp.id_sp")
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start","<=",$date],
                ["sp.date_finish",">=",$date]
            ])
            ->orWhere([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start",null],
                ["sp.date_finish",null]
            ])
            ->select("sp.*",DB::raw('gia*(100-giamgia)/100 as giaban'))
            ->orderBy('giaban','ASC')
            ->paginate(20);
        }elseif($sapxep=='ggc-ggt'){
            return DB::table("slide_sp as ssp")
            ->join("slide as s","ssp.id_slide","=","s.id_slide")
            ->join("sanpham as sp","ssp.id_sp","=","sp.id_sp")
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start","<=",$date],
                ["sp.date_finish",">=",$date]
            ])
            ->orWhere([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start",null],
                ["sp.date_finish",null]
            ])
            ->orderBy('sp.giamgia','DESC')
            ->paginate(20);
        }else{
            return DB::table("slide_sp as ssp")
            ->join("slide as s","ssp.id_slide","=","s.id_slide")
            ->join("sanpham as sp","ssp.id_sp","=","sp.id_sp")
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start","<=",$date],
                ["sp.date_finish",">=",$date]
            ])
            ->orWhere([
                ["ssp.id_slide",$id_slide],
                ["s.active",1],
                ["sp.date_start",null],
                ["sp.date_finish",null]
            ])
            ->orderBy('sp.giamgia','ASC')
            ->paginate(20);
        }
    }
}
