<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Shop\Donhang;
use App\Http\Requests\doimk;
use Auth;
use DB;
class UserController extends Controller
{
    public function index(){
    	return view('shop.user.index');
    }
    public function donhang(){
		$title="Các đơn hàng bạn đã đặt";
    	$username=Auth::user()->username;
		$objItems=DB::table('cart')->where('username',$username)->orderBy('id_cart','DESC')->paginate(20);
		foreach($objItems as $stt => $item){
			$objItems[$stt]->sanpham=DB::table('cart_detail')->where('id_cart',$item->id_cart)->get();
		}
    	return view('shop.user.donhang',compact('objItems','title'));
	}
	public function donhang_gioithieu(){
		$title="Các đơn hàng bạn giới thiệu";
    	$username=Auth::user()->username;
		$objItems=DB::table('cart')->where('gioithieu',$username)->orderBy('id_cart','DESC')->paginate(20);
		foreach($objItems as $stt => $item){
			$objItems[$stt]->sanpham=DB::table('cart_detail')->where('id_cart',$item->id_cart)->get();
		}
    	return view('shop.user.donhang',compact('objItems','title'));
	}
	public function history(){
    	$username=Auth::user()->username;
		$objItems=DB::table('user_history')->where('username',$username)->orderBy('date','DESC')->paginate(20);
    	return view('shop.user.history',compact('objItems'));
	}
    public function doimk(){
    	return view('shop.user.matkhau');
    }
    public function post_doimk(doimk $req){
    	$username=Auth::user()->username;
    	$data = $req->only(['password']);
    	$data['username']=$username;
    	if (Auth::attempt($data)) {
    		if($req->password2==$req->password3){
    			$password=bcrypt($req->password2);
    			DB::table('users')->update(['password'=>$password]);
    			return redirect()->back()->with(['msg'=>'Đổi mật khẩu thành công !']);
    		}
    		return redirect()->back()->with(['msg'=>'Mật khẩu Không khớp !']);
    	}else{
    		return redirect()->back()->with(['msg'=>'Mật khẩu không đúng !']);
    	}
    }
}
