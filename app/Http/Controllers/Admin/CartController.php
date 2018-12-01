<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Cart;
use Auth;
use DB;
use Mail;

class CartController extends Controller
{
    public function __construct(Cart $cart){
        $this->cart=$cart;
    }
    public function index(){
        $title="Tất cả đơn hàng";
        $objItems=$this->cart->getAll();
        foreach($objItems as $stt => $item ){
            $id_cart=$item->id_cart;
            $objItems[$stt]->detail=$this->cart->getAll_cart_detail($id_cart);
        }
        return view('admin.cart.index',compact('objItems','title'));
    }
    public function tk_index(Request $req){
        $key=$req->key;
        $objItems = $this->cart->tk_index($key);
        foreach($objItems as $stt => $item ){
            $id_cart=$item->id_cart;
            $objItems[$stt]->detail=$this->cart->getAll_cart_detail($id_cart);
        }
        return view('admin.cart.search.tk_index',compact('objItems'));
    }
    public function donhangmoi(){
        $title="Đơn hàng mới";
        $objItems=$this->cart->getAll_moi();
        foreach($objItems as $stt => $item ){
            $id_cart=$item->id_cart;
            $objItems[$stt]->detail=$this->cart->getAll_cart_detail($id_cart);
        }
        return view('admin.cart.index',compact('objItems','title'));
    }
    public function tk_donhangmoi(Request $req){
        $key=$req->key;
        $objItems = $this->cart->tk_donhangmoi($key);
        foreach($objItems as $stt => $item ){
            $id_cart=$item->id_cart;
            $objItems[$stt]->detail=$this->cart->getAll_cart_detail($id_cart);
        }
        return view('admin.cart.search.tk_index',compact('objItems'));
    }
    public function nhanviennhan(){
        $title="Đơn hàng bạn xử lý";
        $auth=Auth::user();
        $objItems=$this->cart->getAll_nhanvien($auth->username);
        foreach($objItems as $stt => $item ){
            $id_cart=$item->id_cart;
            $objItems[$stt]->detail=$this->cart->getAll_cart_detail($id_cart);
        }
        return view('admin.cart.index',compact('objItems','title'));
    }
    public function tk_nhanviennhan(Request $req){
        $key=$req->key;
        $auth=Auth::user();
        $objItems = $this->cart->tk_nhanviennhan($key,$auth->username);
        foreach($objItems as $stt => $item ){
            $id_cart=$item->id_cart;
            $objItems[$stt]->detail=$this->cart->getAll_cart_detail($id_cart);
        }
        return view('admin.cart.search.tk_index',compact('objItems'));
    }
    public function view(Request $req){
        $username=Auth::user()->username;
        $id_cart=$req->id_cart;
        $objItem=$this->cart->getItem($id_cart);
        if($objItem->nhanvien==null){
            DB::table("cart")->where('id_cart',$id_cart)->update(['nhanvien'=>$username]);
            $objItem->nhanvien=$username;
            $req->session()->flash('msg_cart','Bạn đã chọn đơn hàng này !');
        }
        $objItem->detail=$this->cart->getAll_cart_detail($id_cart);
        return view('admin.cart.view',compact('objItem'));
    }
    public function trangthai(Request $req){
        $auth=Auth::user();
        $date=date('Y-m-d H:i:s');
        $id_cart=$req->id_cart;
        $active=$req->active;
        if($active==0){
            DB::table("cart")->where('id_cart',$id_cart)->update(['active'=>'1']);
            $active=1;
        }elseif($active==1){
            DB::table("cart")->where('id_cart',$id_cart)->update(['active'=>'2']);
            $active=2;
            $objItem=DB::table("cart")->where('id_cart',$id_cart)->first();
            //lay thongtin cua nguoi giơi thieu
            $user=DB::table("users")->where('username',$objItem->gioithieu)->first();
            if($user!=null){
                $arHistory=[
                    'username'=>$objItem->gioithieu,
                    'nhanvien'=>$auth->username,
                    'date'=>$date,
                    'title'=>'Giới thiệu sản phẩm thành công !',
                    'noidung'=>"Bạn được cộng thêm vài tài khoản với sô tiền :".number_format($req->session()->get('hoahong'),0)."đ"
                ];
                DB::table('user_history')->insertGetId($arHistory);
                //cong them tien hoa hong vao cho nguoi giơi thieu
                $money=$user->money + $req->session()->get('hoahong');
                DB::table('users')->where('username',$objItem->gioithieu)->update(['money'=>$money]);
            }
        }else{
            DB::table("cart")->where('id_cart',$id_cart)->update(['active'=>'-1']);
            $objItem=DB::table("cart")->where('id_cart',$id_cart)->first();
            if($objItem->httt==1){
                $arHistory=[
                    'username'=>$objItem->username,
                    'nhanvien'=>$auth->username,
                    'date'=>$date,
                    'title'=>'Hoàn tiền đơn hàng bị hủy !',
                    'noidung'=>"Bạn được hoàn trả lại với sô tiên :".number_format($req->session()->get('tongtien'),0)."đ"
                ];
                DB::table('user_history')->insertGetId($arHistory);
                $user=DB::table("users")->where('username',$objItem->username)->first();
                $money=$user->money + $req->session()->get('tongtien');
                DB::table('users')->where('username',$objItem->username)->update(['money'=>$money]);
            }
        }
        return view('admin.cart.trangthai_cart',compact('id_cart','active'));
    }
    public function baohethang(Request $req){
        $id_cart=$req->id_cart;
        $objItem=DB::table("cart")->where('id_cart',$id_cart)->first();
        if($objItem->httt != 0){
            return 'Nếu hết hàng thì "tiến hành hủy đơn hàng để hoàn tiền lại cho khách !"';
        }
        $id_sp=$req->id_sp;
        DB::table("cart_detail")->where('id_cart',$id_cart)->where('id_sp',$id_sp)->update(['active'=>0]);
        return "Hết hàng";
    }
    public function tru(Request $req){
        $id_cart=$req->id_cart;
        $objCart=$this->cart->getItem($id_cart);
        $id_sp=$req->id_sp;
        $objSp=DB::table('cart_detail')->where('id_cart',$id_cart)->where('id_sp',$id_sp)->first();
        if($objCart->active==0 && $objSp->active==1){
            DB::table("cart_detail")->where('id_cart',$id_cart)->where('id_sp',$id_sp)->update(['soluong'=>$objSp->soluong - 1]);
        }
        $objCart->detail=$this->cart->getAll_cart_detail($id_cart);
        $objItem=$objCart;
        return view('admin.cart.view',compact('objItem'));
    }
    public function cong(Request $req){
        $id_cart=$req->id_cart;
        $objCart=$this->cart->getItem($id_cart);
        $id_sp=$req->id_sp;
        $objSp=DB::table('cart_detail')->where('id_cart',$id_cart)->where('id_sp',$id_sp)->first();
        if($objCart->active==0 && $objSp->active==1){
            DB::table("cart_detail")->where('id_cart',$id_cart)->where('id_sp',$id_sp)->update(['soluong'=>$objSp->soluong + 1]);
        }
        $objCart->detail=$this->cart->getAll_cart_detail($id_cart);
        $objItem=$objCart;
        return view('admin.cart.view',compact('objItem'));
    }
    public function del($id_cart,Request $req){
		if($this->cart->del($id_cart)){
            return redirect()->back()->with(['msg'=>'Xóa thành công !']);
        }
	}
}