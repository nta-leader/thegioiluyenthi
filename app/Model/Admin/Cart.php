<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cart extends Model
{
    protected $table="cart";
    protected $primarKey="id_cart";

    public function getAll(){
        return $this->orderBy('id_cart','DESC')->paginate(10);
    }
    public function tk_index($key){
        return $this->where('username','like','%'.$key.'%')
        ->orWhere('gioithieu','like','%'.$key.'%')
        ->get();
    }
    public function getAll_moi(){
        return $this->where('nhanvien',null)->orderBy('id_cart','DESC')->paginate(10);
    }
    public function tk_donhangmoi($key){
        return $this->where([
            ['nhanvien',null],
            ['username','like','%'.$key.'%']
        ])
        ->orWhere([
            ['nhanvien',null],
            ['gioithieu','like','%'.$key.'%']
        ])
        ->get();
    }
    public function getAll_nhanvien($username){
        return $this->where('nhanvien',$username)->orderBy('id_cart','DESC')->paginate(10);
    }
    public function tk_nhanviennhan($key,$username){
        return $this->where([
            ['nhanvien',$username],
            ['username','like','%'.$key.'%']
        ])
        ->orWhere([
            ['nhanvien',$username],
            ['gioithieu','like','%'.$key.'%']
        ])
        ->get();
    }
    public function getItem($id_cart){
        return $this->where('id_cart',$id_cart)->first();
    }
    public function getAll_cart_detail($id_cart){
        return DB::table('cart_detail')->where('id_cart',$id_cart)->get();
    }
    public function del($id_cart){
        DB::table('cart_detail')->where('id_cart',$id_cart)->delete();
        return $this->where('id_cart',$id_cart)->delete();
    }
}
