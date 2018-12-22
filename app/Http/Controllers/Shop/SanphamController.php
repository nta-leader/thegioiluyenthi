<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Shop\Sanpham;
use App\Model\Shop\Anh;
use App\Model\Shop\Cat;
use Auth;
class SanphamController extends Controller
{
    public function index($namesanpham, $id,Sanpham $sanpham,Anh $anh,Request $req,Cat $cat){
        $auth=Auth::user();
        if(isset($req->gioithieu)){
            $req->session()->put('gioithieu',$req->gioithieu);
        }
    	$arId=explode('-',$id);
    	$id=end($arId);
        $objItem_sp=$sanpham->getItem($id);
        if($objItem_sp==null){return redirect()->back();}
    	$objItems=$sanpham->getDexuat($id);
        $objItem_anh=$anh->getList($id);
        $name_cat=$cat->getItem($objItem_sp->id_cat);
    	return view('shop.sanpham.index',compact('objItem_sp','objItem_anh','objItems','id','name_cat'));
    }
    public function chiase(Request $req){
        $auth=Auth::user();
        if(isset($auth->username)){
            $text=editString($req->namesp);
            $url=route('shop.sanpham.index',['namesanpham'=>$text,'id'=>$req->id_sp]).'?gioithieu='.$auth->username;
            return "<br><p style='color:red;'>{$url}</p>";
        }else{
            return "<br><p style='color:red;'>Vui lòng đăng nhập !</p>";
        }
    }
}