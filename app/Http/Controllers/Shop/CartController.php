<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Shop\Sanpham;
use App\Http\Requests\Dathang;
use DB;
use Auth;
use Mail;
class CartController extends Controller
{
    public function __construct(Sanpham $Sanpham){
        $this->Sanpham=$Sanpham;
    }
    public function add(Request $req){
        $id_sp=$req->id_sp;
        $check=$this->Sanpham->getItem($id_sp);
        if($check==null){
            $error=1;
            $soluong=0;
            $tongtien=0;
            return view('shop.cart.add',compact('soluong','tongtien','error'));
        }
        if($req->session()->has('cart')){
            $cart=$req->session()->get('cart');
            if(isset($cart[$id_sp])){
                return view('shop.cart.add');
            }
            $tongtien=$req->session()->get('tongtien');
            $soluong=$req->session()->get('soluong');
        }else{
            $tongtien=0;
            $soluong=0;
        }
        $objItem=$this->Sanpham->getItem($id_sp);
        $cart[$id_sp]=[
            'ma_sp'=>$objItem->ma_sp,
            'id_sp'=>$id_sp,
            'namesp'=>$objItem->namesp,
            'picture'=>$objItem->picture,
            'gia'=>$objItem->gia,
            'giam'=>$objItem->giamgia,
            'chiase'=>$objItem->chiase,
            'soluong'=>1
        ];
        //Số lượng lọa sản phẩm
        $soluong+=1;
        $req->session()->put('soluong',$soluong);
        $tongtien+=$objItem->gia*(100-$objItem->giamgia)/100;
        $req->session()->put('tongtien',$tongtien);
        $req->session()->put('cart',$cart);
        return view('shop.cart.add',compact('soluong','tongtien'));
    }
    public function index(Request $req){
    	if($req->session()->has('cart')){
            $cart=$req->session()->get('cart');
            $tong=0;
            return view('shop.cart.index',compact('cart','tong'));
        }else{
            return "<h2 style='color:red; text-align:center;'>Giỏ hàng rỗng !</h2>";
        }
    }
    public function tru(Request $req){
        $id_sp=$req->id_sp;
        $cart=$req->session()->get('cart');
        $cart[$id_sp]['soluong']-=1;
        $req->session()->put('cart',$cart);
        $tong=0;
        return view('shop.cart.index',compact('cart','tong'));
    }
    public function cong(Request $req){
        $id_sp=$req->id_sp;
        $cart=$req->session()->get('cart');
        $cart[$id_sp]['soluong']+=1;
        $req->session()->put('cart',$cart);
        $tong=0;
        return view('shop.cart.index',compact('cart','tong'));
    }
    public function del(Request $req){
        $id_sp=$req->id_sp;
        $cart=$req->session()->get('cart');
        unset($cart[$id_sp]);
        $req->session()->put('cart',$cart);
        if(count($cart)==0){ 
            $req->session()->forget('cart');
            $req->session()->forget('soluong');
            $req->session()->forget('tongtien');
        }
        $tong=0;
        return view('shop.cart.index',compact('cart','tong'));
    }
    public function huy(Request $req){
        $req->session()->forget('cart');
        $req->session()->forget('soluong');
        $req->session()->forget('tongtien');
        return redirect()->route('shop.index.index');
    }
    public function thanhtoan(Request $req){
        $auth=Auth::user();
        if(!$req->session()->has('cart')){
            return redirect()->back();
        }else{
            if(isset($auth->username)){
                return view('shop.cart.thanhtoan');
            }else{
                return redirect()->route('auth.login')->with(['msg'=>'Vui lòng dăng nhập trước khi đặt hàng !']);
            }
        }
    }
    public function dathang(Dathang $req){
        if(!$req->session()->has('cart')){
            return redirect()->route('shop.index.index');
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=date('Y-m-d H:i:s');
        $day=date('Y-m-d');
        $month=date('Y-m');
        $year=date('Y');
        $auth=Auth::user();
        //nguoi gioi thieu web mặc định null
        $gioithieu=null;
        $cart=$req->session()->get('cart');
        if($req->thanhtoan > 1 || $req->thanhtoan < 0){
            return redirect()->back();
        }
        if($req->code != '' && $req->code != $auth->username){
            $gioithieu=$req->code;
        }else{
            if($req->session()->has('gioithieu')){
                $gioithieu=$req->session()->get('gioithieu');
                if($gioithieu==$auth->username){
                    $gioithieu=null;
                }
            }
        }
        $arItem=[
            'username'=>$auth->username,
            'name'=>$req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'address'=>$req->address,
            'comment'=>$req->comment,
            'gioithieu'=>$gioithieu,
            'date'=>$date,
            'httt'=>$req->thanhtoan,
            'active'=>0
        ];
        //dd($cart);
        $id_cart=DB::table('cart')->insertGetId($arItem);
        //$id_cart= DB::getPdo()->lastInsertId();
        foreach($cart as $item){
            $item['id_cart']=$id_cart;
            $item['active']=1;
            DB::table('cart_detail')->insert($item);
        }
        if($req->thanhtoan==1){
            DB::table('users')->where('id',$auth->id)->update(['money'=>ceil($auth->money - $req->session()->get('tongtien'))]);
            $arHistory=[
                'username'=>$auth->username,
                'date'=>$date,
                'title'=>'Mua hàng',
                'noidung'=>"Bạn thanh toán bằng tài khoản web với sô tiên :".number_format(Session('tongtien'),0)."đ"
            ];
            DB::table('user_history')->insertGetId($arHistory);
        }
        $req->session()->forget('cart');
        $req->session()->forget('soluong');
        $req->session()->forget('tongtien');

        $data=[
            'email'=>$req->email,
            'tieude'=>'thegioiluyenthi.com -> Đặt hàng thành công',
            'data'=>$arItem,
            'cart'=>$cart
        ];
        Mail::send('shop.cart.mail',$data,function($msg) use ($data){
            $msg->from('thegioiluyenthi@gmail.com','thegioiluyenthi.com');
            $msg->to($data['email']);
            $msg->subject($data['tieude']);
        });
        return view('shop.cart.success');
    }
    //kiem tra thanh toan tai khoan web
    public function check(){
        $auth=Auth::user();
        $sodu=$auth->money;
        $gia=Session('tongtien');
        if($sodu-$gia > 0){
            return "<span style='color:red;'>Số dư hợp lệ !</span>";
        }else{
            return "<script>document.getElementById('taikhoanweb').innerHTML = '<b><i>Tài khoản web không đủ !</i></b>';</script>";
        }
    }

    //kem tra mã giới thiệu
    public function check_code(Request $req){
        $auth=Auth::user();
        $code=$req->code;
        if($code == $auth->username){
            return 2;
        }
        $check=DB::table('users')->where('username',$code)->count();
        if($check==1){
            return 1;
        }else{
            return 0;
        }
    }
}
