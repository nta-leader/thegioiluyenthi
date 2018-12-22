<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Shop\Cat;
use App\Model\Shop\Sanpham;
use Response;
class CatController extends Controller
{
    public function index($namecat,$id,Cat $cat,Sanpham $sanpham,Request $req){
		if(isset($req->sapxep)){
			$sapxep=$req->sapxep;
			$req->session()->put('sapxep',$req->sapxep);
		}elseif($req->session()->has('sapxep')){
			$sapxep=$req->session()->get('sapxep');
		}else{
			$sapxep="spm-spc";
		}

    	$arText=explode('-',$id);
    	$id=end($arText);
    	$name_cat=$cat->getItem($id);

    	$arItem=['0'=>$id];
    	$data=$cat->getList();
    	$arItem=$cat->getDMC($id,$data,$arItem);
    	//dd($sapxep);
		$objItems=$sanpham->getList_cat($arItem,$sapxep);
		//dd($objItems);
    	return view('shop.cat.index',compact('objItems','name_cat'));
    }
    public function timkiem(Request $req,Sanpham $sanpham,Cat $cat){
		if( $req->search !='' ){
			$key=$req->search;
			$id=$req->id_cat;
			$req->session()->put('search',$key);
			$req->session()->put('id_cat',$id);
		}else{
			$key=$req->session()->get('search');
			$id=$req->session()->get('id_cat');
		}
		//sap xep
		if(isset($req->sapxep)){
			$sapxep=$req->sapxep;
			$req->session()->put('sapxep',$req->sapxep);
		}elseif($req->session()->has('sapxep')){
			$sapxep=$req->session()->get('sapxep');
		}else{
			$sapxep="spm-spc";
		}
		
		if($id != 0){
			$name_cat=$cat->getItem($id);
			$name_cat->search='Từ khóa: <span style="color:red;">'.$key.'</span>';
			//lay cac id_cat 
			$arItem=['0'=>$id];
			$data=$cat->getList();
			$arItem=$cat->getDMC($id,$data,$arItem);

			$objItems=$sanpham->timkiem($arItem,$key,$sapxep);
		}else{
			$name_cat=[
				"namecat"=>"Tất cả",
				"id_cat"=>"0",
				"search"=>'Từ khóa: <span style="color:red;">'.$key.'</span>'
			];
			$objItems=$sanpham->timkiem(0,$key,$sapxep);
		}
        return view('shop.cat.index',compact('objItems','name_cat'));
	}
	public function giamgia(Sanpham $sanpham){
		$name_cat=[
			"namecat"=>"Giảm giá",
			"id_cat"=>"0",
			"search"=>'Giảm giá'
		];
		$objItems=$sanpham->giamgia_all();
		return view('shop.cat.index',compact('objItems','name_cat'));
	}
	public function muanhieu(Sanpham $sanpham){
		$name_cat=[
			"namecat"=>"Mua nhiều",
			"id_cat"=>"0",
			"search"=>'Mua nhiều'
		];
		$objItems=$sanpham->muanhieu_all();
		return view('shop.cat.index',compact('objItems','name_cat'));
	}
}