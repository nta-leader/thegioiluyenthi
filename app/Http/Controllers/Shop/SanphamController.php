<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Shop\Sanpham;
use App\Model\Shop\Anh;
use App\Model\Shop\Comment;
use App\Model\Shop\Cat;
use Auth;
class SanphamController extends Controller
{
    public function index($namesanpham, $id,Sanpham $sanpham,Anh $anh,Comment $comment,Request $req,Cat $cat){
        $auth=Auth::user();
        if(isset($req->gioithieu)){
            $req->session()->put('gioithieu',$req->gioithieu);
        }
    	$arId=explode('-',$id);
    	$id=end($arId);
    	$objItem_sp=$sanpham->getItem($id);
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
    public function comment(Request $req,Comment $comment){
        $auth=Auth::user();
        if(isset($auth->username)){
            $arItem=[
                'id_sp'=>$req->id_sp,
                'username'=>$auth->username,
                'parent_id'=>$req->id_cm,
                'content'=>$req->content,
            ];
            $comment->add($arItem);
            $req->session()->flash('msg','Bình luận thành công !');
        }else{
            $req->session()->flash('msg','Vui lòng đăng nhập !');
        }    
        $objCm_cha=$comment->getList_sp_cha($req->id_sp);
        $objCm_con=$comment->getList_sp_con($req->id_sp);
        $id_sp=$req->id_sp;
        return view('shop.sanpham.comment',compact('objCm_cha','objCm_con','id_sp'));
    }
}