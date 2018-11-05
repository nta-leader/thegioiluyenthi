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
<link href="{{$urlShop}}/image/catalog/cart.png" rel="icon" />
<link href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet_custom/stylesheet.css" rel="stylesheet" />
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
						<a itemprop="url" href="">
							<span itemprop="title">Liên hệ</span>
						</a>
					</li>                   
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

@section('detail')
<section class="margin-top-0">
    <div class="container contact-page">
        <div class="row">
            <div id="content" class="col-sm-12 col-xs-12 col-md-12">
                <div class="row">
                    <h1 class="title-section-page hidden">Liên hệ với chúng tôi</h1>
                    <div class="section_maps col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box-maps">
                            <div class="iFrameMap">
                                <div class="google-map">
                                    <div id="contact_map" class="map">
                                        <style>
                                            .container_iframe_google_map iframe {
                                                width: 100% !important;
                                                height: 300px !important;
                                            }
                                        </style>
                                        <div class="container_iframe_google_map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.9814169168385!2d108.18626571485851!3d16.06645408888261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219002397492f%3A0x60475b47d6844ef9!2zMTMyIE5ndXnhu4VuIMSQ4bupYyBUcnVuZywgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmcgNTUwMDAw!5e0!3m2!1svi!2s!4v1532791550023" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-30">
                        <div class="page_cotact">
                            <h2 class="title-head-contact a-left">
                                <span>Địa chỉ của chúng tôi</span>
                            </h2>
                        </div>
                        <div class="content">
                            <div class="intro">
                                <span><strong>BigBoom</strong></span>
                            </div>
                            <div class="item_contact">
                                <div class="body_contact">
                                    <span class="contact_info">
                                        <span><strong>Địa chỉ: </strong> Số A12, Đinh Tiên Hoàng, Q. Hoàn Kiếm, TP Hà Nội</span>
                                    </span>
                                </div>
                                <div class="body_contact item_2_contact">
                                    <span class="contact_info">
                                        <strong>Điện thoại:</strong>
                                        <a href="tel:0123 456 789">0123 456 789</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-30">
                        <div class="page-login page_cotact">
                            <h2 class="title-head-contact a-left">
                                <span>Thông tin liên hệ</span>
							</h2>
                            <div id="pagelogin">
                                <form action="{{route('shop.contact.post')}}" method="post" enctype="multipart/form-data" class="" id="contact">
								{{csrf_field()}}	
								<div class="form-signup clearfix">
								@if(Session::has('msg'))
									<h4 style="color: red;">{{Session::get('msg')}}</h4>
								@endif
								@if ($errors->any())
									<div>
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
                                        <div class="row group_contact">
                                            <fieldset class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <input type="text" name="name" value="" id="name" class="form-control form-control-lg" placeholder="Tên của bạn">
                                            </fieldset>
                                            <fieldset class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <input type="text" name="phone" value="" class="form-control form-control-lg" placeholder="Số điện thoại" id="email">
											</fieldset>
											<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <input id="email" type="email" name="email" placeholder="email" class="form-control form-control-lg" >
                                            </fieldset>
                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <textarea id="comment" name="message" rows="5" placeholder="Nội dung" class="form-control content-area form-control-lg"></textarea>
                                            </fieldset>
                                            <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            </fieldset>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-10">
                                                <button type="submit" class="btn btn-primary">Gửi đi</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
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
