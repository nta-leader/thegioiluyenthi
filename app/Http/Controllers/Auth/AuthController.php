<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Mail;
use App\Http\Requests\Dangky;
class AuthController extends Controller
{
    public function login(){
    	return view('shop.login');
    }
    public function postlogin(Request $req){
        $data = $req->only(['username','password']);
        $username=trim($req->username);
        $password=trim($req->password);
    	if (Auth::attempt($data)) {
    		$auth=Auth::user();
    		if($auth->chucvu <= 1){
    			return redirect()->route('admin.index');
    		}else{
    			return redirect()->back()->with(['msg'=>'Đăng nhập thành công !']);
    		}
		}else{
			return redirect()->route('auth.login')->with(['msg'=>'Sai username hoặc password !']);
		}
	}
	public function quenmatkhau(){
		return view('shop.quenmatkhau');
	}
	public function postquenmatkhau(Request $req){
		$this->validate($req,
			[
				'email'=>'required | email'
			],
			[
				'required.email'=>'Vui lòng nhập email !',
				'email.email'=>'Nhập đúng định dạng email !'
			]
		);
		$email=$req->email;
		$check=DB::table('users')->where('email',$email)->count();
		if($check == 1){
			$req->session()->put('email',$email);
			$code=substr(md5(time()),0,8);
			$req->session()->put('code',$code);
			$data=[
				'email'=>$email,
				'tieude'=>'thegioiluyenthi.com -> Quên mật khẩu',
				'code'=>$code,
			];
			//dd($data);
			Mail::send('shop.email',$data,function($msg) use ($data){
				$msg->from('theanh.a1k12@gmail.com','thegioiluyenthi.com');
				$msg->to($data['email']);
				$msg->subject($data['tieude']);
			});
			return view('shop.nhapcode');
		}else{
			return redirect()->back()->with(['msg'=>'email không chính xác !']);
		}
	}
	public function nhapcode(Request $req){
		if($req->session()->get('code')==$req->code){
			$req->session()->put('check',1);
			return redirect()->route('auth.nhapmatkhau');
		}else{
			return redirect()->back()->with(['msg'=>'Mã không chính xác !']);
		}
	}
	public function nhapmatkhau(Request $req){
		if($req->session()->has('check')==true && $req->session()->get('check')==1){
			return view('shop.nhapmatkhau');
		}else{
			return redirect()->route('shop.index.index');
		}
	}
	public function doimatkhau(Request $req){
		if($req->session()->has('check')==true && $req->session()->get('check')==1){
			$this->validate($req,
				[
					'password'=>'required | min:6',
					'password2'=>'same:password',
				],
				[
					'password.required'=>'Vui lòng nhập password',
					'password.min'=>'Mật khẩu tối thiểu 6 ký tự',
					'password2.same'=>'mật khẩu không khớp !'
				]
			);
			$email=$req->session()->get('email');
			$password=$req->password;
			DB::table('users')->where('email',$email)->update(['password'=>bcrypt($password)]);
			$req->session()->forget('email');
			$req->session()->forget('code');
			$req->session()->forget('check');
			return redirect()->route('auth.login')->with(['msg'=>'Đổi mật khẩu thành công !']);
		}else{
			return redirect()->route('shop.index.index');
		}	
	}
    public function dangky(){
    	return view('shop.dangky');
    }
    public function postDangky(Dangky $req){
    	$username=$req->username;
    	$password=$req->password;
    	$password2=$req->password2;
		$fullname=$req->fullname;
		$email=$req->email;
		$facebook=$req->facebook;
		$phone=$req->phone;
		$address=$req->address;
    	if($password==$password2){
    		$arItem=[
    			'username'=>$username,
    			'password'=>bcrypt($password),
				'fullname'=>$fullname,
				'email'=>$email,
				'facebook.com'=>$facebook,
				'phone'=>$phone,
				'address'=>$address,
				'money'=>0,
    			'chucvu'=>2,
    		];
    		DB::table('users')->insertGetId($arItem);
    		$req->session()->flash('msg','Đăng ký thành công !');
    		return redirect()->route('auth.login');
    	}else{
    		$req->session()->flash('msg','Mật khẩu không khớp !');
    		$req->session()->flash('username',$username);
    		$req->session()->flash('fullname',$fullname);
    		return redirect()->route('auth.dangky');
    	}
    }
    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }
}
