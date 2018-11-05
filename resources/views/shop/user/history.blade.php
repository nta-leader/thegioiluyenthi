@extends('templates.shop.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet/owl.theme.default.min.css" />
<link rel="stylesheet" type="text/css" href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet/style.css" />
<link rel="stylesheet" type="text/css" href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet/base.css" />
<link rel="stylesheet" type="text/css" href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet/module.css" />
<link rel="stylesheet" type="text/css" href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet/jquery.fancybox.min.css" />
<link rel="stylesheet" type="text/css" href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet/responsive.css" />
<link rel="stylesheet" type="text/css" href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet/stylesheet.css" />
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/jquery-3.3.1.min.js"></script>
<link href="{{$urlShop}}/catalog/view/javascript/jquery/magnific/magnific-popup.css" type="text/css" rel="stylesheet" media="screen" />
<link href="{{$urlShop}}/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
<link href="{{$urlShop}}/ao-hoodie-nu-chu-theu-thoi-trang-sid53235.html" rel="canonical" />
<link href="{{$urlShop}}/image/catalog/cart.png" rel="icon" />
<script src="{{$urlShop}}/catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="{{$urlShop}}/catalog/view/javascript/jquery/datetimepicker/moment.js" type="text/javascript"></script>
<script src="{{$urlShop}}/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<link href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet_custom/stylesheet.css" rel="stylesheet" />
<style type="text/css">
	._item{
        width: 228px;
        height: 200px
    }
</style>
@endsection
@section('duongdan')
<section class="bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <li class="home">
						<a itemprop="url" href="/">
							<span itemprop="title"><i class="fa fa-home"></i></span>
						</a>
						<span><i class="fa">/</i></span>
					</li>
					<li class="">
						<a itemprop="url">
							<span itemprop="title">Quản lý tài khoản</span>
						</a>
					</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
@php $auth=Auth::user();  @endphp
@section('detail');
<section class="product" itemscope="" itemtype="http://schema.org/Product">
    <div class="container">
        <div class="main-product-page">
            <div class="row">
                <div class="details-product">
                    <div id="content" class="col-sm-12 col-xs-12 col-md-9 col-md-push-3">
					<h1 style="color:red;margin-top: 0;font-size: 30px;">Lịch sử</h1>
                        @foreach($objItems as $item)
                            <ul style="background: #cec8c8;padding: 10px 30px;border-radius: 5px;margin-bottom: 20px;">
                                <li>Thời gian: {{$item->date}}</li>
                                <li>Chủ đề: {{$item->title}}</li>
                                <li>Người tác động: @if($item->nhanvien==null) Bạn @else {{$item->nhanvien}} @endif</li>
                                <li>Nội dung: {{$item->noidung}}</li>
                            </ul>
                        @endforeach
                        {{$objItems->links()}}
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-3 sidebar section-main-sidebar padding-small margin-bottom-50 clearfix col-md-pull-9">
                        <aside id="column-left" class="left-column compliance dqdt-sidebar sidebar left-content article-sidebar left">
                            <aside class="aside-item sidebar-category collection-category">
                                <div class="aside-title">
                                    <h2 class="title-head margin-top-0" style="text-transform: none;">
										<span style="color: #d72f2b;">
											Xin chào: "{{$auth->username}}"
										</span>
                                    </h2>
                                </div>
                                <div class="aside-content">
                                    <nav class="nav-category navbar-toggleable-md">
                                        <ul class="nav navbar-pills">
										<li class="nav-item lv1">
                                                <a class="nav-link " href="">
													Thông tin tài khoản
												</a>
                                            </li>
											<li class="nav-item lv1">
                                                <a class="nav-link " href="{{route('shop.user.donhang')}}">
													Các đơn hàng đã đặt
												</a>
                                            </li>
											<li class="nav-item lv1">
                                                <a class="nav-link " href="{{route('shop.user.donhang_gioithieu')}}">
													Các đơn hàng bạn giới thiệu
												</a>
                                            </li>
											<li class="nav-item lv1">
                                                <a class="nav-link " href="{{route('shop.user.history')}}">
													Lịch sử
												</a>
                                            </li>
											<li class="nav-item lv1">
                                                <a class="nav-link " href="">
													Đổi mật khẩu
												</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </aside>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('')
@section('js')
<script>
	function loading() {
    	document.getElementById("ajax_loader").style.display = "block";
	}
</script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/jquery.cookie.min.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/option-selectors.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/api.jquery.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/cs.script.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/appear.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/main.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/jquery.elevatezoom.min.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/jquery.prettyphoto.in1t.min.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/jquery.prettyphoto.min.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/common.js"></script>
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/custom.js"></script>
@endsection