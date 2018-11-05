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
    public function getAll_moi(){
        return $this->where('nhanvien',null)->orderBy('id_cart','DESC')->paginate(10);
    }
    public function getAll_nhanvien($username){
        return $this->where('nhanvien',$username)->orderBy('id_cart','DESC')->paginate(10);
    }
    public function getItem($id_cart){
        return $this->where('id_cart',$id_cart)->first();
    }
    public function getAll_cart_detail($id_cart){
        return DB::table('cart_detail')->where('id_cart',$id_cart)->get();
    }
}
