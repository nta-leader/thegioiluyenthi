<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Shop\Slide;
use DB;

class SlideController extends Controller
{
    public function index($name,Slide $slide,Request $req){
        if(isset($req->sapxep)){
			$sapxep=$req->sapxep;
			$req->session()->put('sapxep',$req->sapxep);
		}elseif($req->session()->has('sapxep')){
			$sapxep=$req->session()->get('sapxep');
		}else{
			$sapxep="spm-spc";
		}

        $objItem=$slide->getItem($name);
        $objItems=$slide->getSlideSanpham($objItem->id_slide,$sapxep);
        return view('shop.slide.index',compact('objItem','objItems'));
    }
}
