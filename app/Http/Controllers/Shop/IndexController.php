<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Shop\Sanpham;
use App\Model\Admin\Cat;
use App\Model\Shop\Slide;
class IndexController extends Controller
{
    public  function index(Sanpham $sanpham,Cat $cat,Slide $slide){
    	$objItems_giamgia=$sanpham->get_giamgia(10);
    	$objItems_muanhieu=$sanpham->get_muanhieu(10);
    	$objCats=$cat->getList_cha();
    	$objItems=[];
    	foreach ($objCats as $key => $value) {
    		$objItems[$value['id_cat']]['namecat']=$value['namecat'];

    		$arItem=['0'=>$value['id_cat']];
	    	$data=$cat->getList();
	    	$arItem=$cat->getDMC($value['id_cat'],$data,$arItem);
	    	$objSanpham=$sanpham->getList($arItem,10);

    		$objItems[$value['id_cat']]['sanpham']=$objSanpham;
		}
		$data='{"chinh":null,"left":null,"bottom":null,"tieubieu":null}';
		$objSlide=json_decode($data);
		$objSlide->chinh=$slide->chinh();
		$objSlide->left=$slide->left();
		$objSlide->bottom=$slide->bottom();
		$objSlide->tieubieu=$slide->tieubieu();
    	return view('shop.index.index',compact('objItems_giamgia','objItems_muanhieu','objItems','objSlide'));
    }
}
