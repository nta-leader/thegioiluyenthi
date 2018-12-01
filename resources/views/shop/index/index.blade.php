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
<link rel="stylesheet" type="text/css" href="{{$urlShop}}/xemthem.css" />
<script type="text/javascript" src="{{$urlShop}}/catalog/view/theme/bigboom/javascript/jquery-3.3.1.min.js"></script>
<link href="{{$urlShop}}/image/catalog/cart.png" rel="icon" />
<link href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet_custom/stylesheet.css" rel="stylesheet" />
@endsection
@section('content')
<div class="row">
	<div class="section-ss-banner col-md-push-3 col-md-9 col-sm-12 col-xs-12 no-padding">
		<div class="section-ss col-md-8 col-sm-8 col-xs-12">
			<link rel="stylesheet" href="{{$urlShop}}/catalog/view/javascript/bxslider/jquery.bxslider.min.css">
			<script src="{{$urlShop}}/catalog/view/javascript/bxslider/jquery.bxslider.min.js"></script>
			<div class="home-slider " id="gallery-0">
				<div class="slider0">
					<div>
						<a href="https://docs.google.com/document/d/1zPlZGfFBDtSa0RA22m3LymVz-qTL5faQSs8SuLE6BcM/edit?fbclid=IwAR3YQL_Sm8UXgQQrI-i0rmm67DLpP-sgDCLj12cuaq9XAZc5Yolzvr2Ka7Q"><img src="/storage/app/slide/1.jpg" alt="" class="img-responsive" style="width: 100%;" />
						</a>
					</div>
					<div>
						<a href="https://docs.google.com/document/d/1zPlZGfFBDtSa0RA22m3LymVz-qTL5faQSs8SuLE6BcM/edit?fbclid=IwAR3YQL_Sm8UXgQQrI-i0rmm67DLpP-sgDCLj12cuaq9XAZc5Yolzvr2Ka7Q"><img src="/storage/app/slide/2.jpg" alt="" class="img-responsive" style="width: 100%;" />
						</a>
					</div>
				</div>
			</div>
			<script>
				$('.slider0').bxSlider({
					/* Tu dong chuyen anh */
					auto: true,
					/* Hieu ung chuyen anh: 'horizontal', 'vertical', 'fade' */
					mode: 'fade',
					/* Toc do chuyen giua cac anh: (ms) */
					speed: 400,
					/* Ho tro hien thi da man hinh */
					responsive: true,
					/* Thoi gian hien thi 1 anh (ms) */
					pause: 5000,
					/* Cac cham dai dien anh: o o o */
					pager: true,
					/* Mui ten next va prev */
					controls: true
				});
			</script>
			<div class="col-md-12 no-padding col-sm-12 hidden-xs">
				<div class="banner-item banner-right col-md-6 col-sm-6 col-xs-12 " id="banner_default-404354953">
					<a href="{{ route('shop.huongdan.index') }}" title="">
						<img class="img-responsive" src="/storage/app/slide/3.jpg" alt="">
						<div class="hover_collection"></div>
					</a>
				</div>
				<div class="banner-item banner-right col-md-6 col-sm-6 col-xs-12 " id="banner_default-1551956591">
					<a href="https://docs.google.com/document/d/1ph6SqDaPhLToM8EPkx2LOodDBbKD_PnXEb07imYfTnY/edit?fbclid=IwAR2K_9PA8nwSu4ZHyBzXdZsGzyiOlCIsSipXz7oUq0Xq-zlxpCsiRE4dmq8" title="">
						<img class="img-responsive" src="/storage/app/slide/4.jpg" alt="">
						<div class="hover_collection"></div>
					</a>
				</div>
			</div>
		</div>
		<div class="banner-right-one banner-item banner-right col-md-4 col-sm-4 hidden-xs">
			<div class=" " id="banner_default-1427028578">
				<a href="javascript:void(0)" title="">
					<img class="img-responsive" src="/storage/app/slide/5.jpg" alt="">
					<div class="hover_collection"></div>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection

@section('tieubieu')
	<section class="awe-section-3 " id="category_custom-1">
		<section class="section_like_product">
			<div class="container">
				<div class="row row-noGutter-2">
					<div class="heading tab_link_module">
						<h2 class="title-head pull-left">
							<span>Tiêu biểu</span>
						</h2>
						<div class="tabs-container tab_border pull-right">
							<span class="hidden-md hidden-lg button_show_tab">
								<i class="fa fa-caret-down"></i>
							</span>
							<span class="hidden-md hidden-lg title_check_tabs"></span>
							<div class="clearfix">
								<ul class="ul_link link_tab_check_click">
									<li class="li_tab">
										<a href="#content-tabb1" class="head-tabs head-tab1" data-src=".head-tab1">Đang giảm giá</a>
									</li>
									<li class="li_tab">
										<a href="#content-tabb2" class="head-tabs head-tab2" data-src=".head-tab2">Bán chạy nhất</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="tabs-content tabs-content-featured col-md-12 col-sm-12 col-xs-12 no-padding">
							<!--Đang giảm giá-->
							<div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none;">
							<a href="{{route('shop.cat.giamgia')}}" class="xemthem_giamgia">Xem thêm</a>
								<div class="row">
									@foreach($objItems_giamgia as $key =>$val)
									@php
										$id_sp=$val['id_sp'];
										$namesp=$val['namesp'];
										$giaban=$val['gia'];
										$giam=$val['giamgia'];
										$giamgia=number_format($giaban*(100-$giam)/100,0,'.',',');
										$giaban=number_format((int)$val['gia'],0,'.',',');
										$picture=$val['picture'];
										$text=editString($namesp);
										$url=route('shop.sanpham.index',['namesanpham'=>$text,'id'=>$id_sp]);
									@endphp
									<div class="col-xs-6 col-sm-4 col-md-4 col-lg-20 custom-mobile mb_margin">
										<div class="wrp_item_small product-col">
											<div class="product-box">
												<div class="product-thumbnail">
													@if($giam > 0)<span class="sale-off">-{{$giam}}%</span>@endif
													<a class="image_link display_flex" href="{{$url}}" title="{{$namesp}}">
														<img src="/storage/app/files/{{$picture}}" data-lazyload="/storage/app/files/{{$picture}}" alt="{{$namesp}}" class="_item">
													</a>
													<div class="product-action-grid clearfix">
														<form class="variants form-nut-grid">
															<div>
																<button class="btn-cart button_wh_40 left-to" title="Mua ngay" type="button" onclick="giohang('{{$id_sp}}')">Mua ngay</button>
																<!--onclick="cart.add(, 1)"></button>-->
																<a href="{{$url}}" class="button_wh_40 btn_view right-to quick-view">
																	<i class="fa fa-eye"></i>
																	<span class="style-tooltip">Xem</span>
																</a>
															</div>
														</form>
													</div>
												</div>
												<div class="product-info effect a-left">
													<div class="info_hhh">
														<h3 class="product-name ">
															<a href="{{$url}}" title="{{$namesp}}">{{$namesp}}</a>
														</h3>
														<div class="reviews-product-grid">
															<div class="zozoweb-product-reviews-badge">
																<div class="zozoweb-product-reviews-star" data-score="0" data-number="5" style="color: rgb(255, 190, 0);">
																	<i data-alt="1" class="star-off-png"></i>&nbsp;
																	<i data-alt="2" class="star-off-png"></i>&nbsp;
																	<i data-alt="3" class="star-off-png"></i>&nbsp;
																	<i data-alt="4" class="star-off-png"></i>&nbsp;
																	<i data-alt="5" class="star-off-png"></i>&nbsp;
																</div>
															</div>
														</div>
														<div class="price-box clearfix">
															<span class="price product-price">{{$giamgia}}đ</span>
															<span style="height:12px;" class="price product-price-old">@if($giam > 0){{$giaban}}đ@endif</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
							<!--Bán chạy nhất-->
							<div id="content-tabb2" class="content-tab content-tab-proindex" style="display:none;">
							<a href="{{route('shop.cat.muanhieu')}}" class="xemthem_muanhieu">Xem thêm</a>
								<div class="row">
								@foreach($objItems_muanhieu as $key =>$val)
									@php
										$id_sp=$val['id_sp'];
										$namesp=$val['namesp'];
										$giaban=$val['gia'];
										$giam=$val['giamgia'];
										$giamgia=number_format($giaban*(100-$giam)/100,0,'.',',');
										$giaban=number_format($val['gia'],0,'.',',');
										$picture=$val['picture'];
										$text=editString($namesp);
										$url=route('shop.sanpham.index',['namesanpham'=>$text,'id'=>$id_sp]);
									@endphp
									<div class="col-xs-6 col-sm-4 col-md-4 col-lg-20 custom-mobile mb_margin">
										<div class="wrp_item_small product-col">
											<div class="product-box">
												<div class="product-thumbnail">
												@if($giam > 0)<span class="sale-off">-{{$giam}}%</span>@endif
													<a class="image_link display_flex" href="{{$url}}" title="{{$namesp}}">
														<img src="/storage/app/files/{{$picture}}" data-lazyload="/storage/app/files/{{$picture}}" alt="{{$namesp}}" class="_item">
													</a>
													<div class="product-action-grid clearfix">
														<form class="variants form-nut-grid">
															<div>
																<button class="btn-cart button_wh_40 left-to" title="Mua ngay" type="button" onclick="onclick="giohang('{{$id_sp}}')">Mua ngay</button>
																<!--onclick="cart.add(, 1)"></button>-->
																<a href="{{$url}}" class="button_wh_40 btn_view right-to quick-view">
																	<i class="fa fa-eye"></i>
																	<span class="style-tooltip">Xem</span>
																</a>
															</div>
														</form>
													</div>
												</div>
												<div class="product-info effect a-left">
													<div class="info_hhh">
														<h3 class="product-name ">
															<a href="{{$url}}" title="{{$namesp}}">{{$namesp}}</a>
														</h3>
														<div class="reviews-product-grid">
															<div class="zozoweb-product-reviews-badge">
																<div class="zozoweb-product-reviews-star" data-score="0" data-number="5" style="color: rgb(255, 190, 0);">
																	<i data-alt="1" class="star-off-png"></i>&nbsp;
																	<i data-alt="2" class="star-off-png"></i>&nbsp;
																	<i data-alt="3" class="star-off-png"></i>&nbsp;
																	<i data-alt="4" class="star-off-png"></i>&nbsp;
																	<i data-alt="5" class="star-off-png"></i>&nbsp;
																</div>
															</div>
														</div>
														<div class="price-box clearfix">
															<span class="price product-price">{{$giamgia}}đ</span>						<span style="height:12px;" class="price product-price-old">@if($giam > 0){{$giaban}}đ@endif</span>		
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<section class="awe-section-2">
		<div class="sec_banner hidden-sm hidden-xs">
			<div class="container">
				<div class="row vc_row-flex">
					<div class="vc_column_container col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<div class="row vc_row-flex">
									<div class="banner-item banner-right col-md-6 col-sm-6 col-xs-12 " id="banner_default-1098570130">
										<a href="javascript:void(0)" title="">
											<img class="img-responsive" src="{{$urlShop}}/image/cache/catalog/banner/bg-top1-570x230.jpg" alt="">
											<div class="hover_collection"></div>
										</a>
									</div>
									<div class="banner-item banner-right col-md-6 col-sm-6 col-xs-12 " id="banner_default-1002948678">
										<a href="javascript:void(0)" title="">
											<img class="img-responsive" src="{{$urlShop}}/image/cache/catalog/banner/bg-top2-570x230.jpg" alt="">
											<div class="hover_collection"></div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('new')
@foreach($objItems as $key => $objItem)
@php
	$id_cat=$key;
	$namecat=$objItem['namecat'];
	$text=editString($namecat);
	$objSanpham=$objItem['sanpham'];
@endphp
		<section class="awe-section-3 " id="category_custom-1">
			<section class="section_like_product">
				<div class="container">
					<div class="row row-noGutter-2">
						<div class="heading tab_link_module">
							<h2 class="title-head pull-left">
								<span>{{$namecat}}</span>
							</h2>
							<div class="tabs-container tab_border pull-right">
								<span class="hidden-md hidden-lg button_show_tab">
									<i class="fa fa-caret-down"></i>
								</span>
								<span class="hidden-md hidden-lg title_check_tabs">Thế giới luyện thi</span>
								<div class="clearfix">
									<ul class="ul_link link_tab_check_click">
										<li class="li_tab">
											<a href="#content-tabb" class="head-tabs head-tab" data-src=".head-tab">Sản phẩm mới</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="tabs-content tabs-content-featured col-md-12 col-sm-12 col-xs-12 no-padding">
								<div id="content-tabb" class="content-tab content-tab-proindex" style="display:none;">
								<a href="{{route('shop.cat.index',['namecat'=>$text,'id'=>$id_cat])}}" class="xemthem">Xem thêm</a>
									<div class="row">
										@foreach($objSanpham as $key =>$val)	
										<!-- Deals Item -->
										@php
											$id_sp=$val->id_sp;
											$namesp=$val->namesp;
											$giaban=$val->gia;
											$giam=$val->giamgia;
											$giamgia=number_format($giaban*(100-$giam)/100,0,'.',',');
											$giaban=number_format($giaban,0,'.',',');
											$picture=$val->picture;
											$text=editString($namesp);
											$url=route('shop.sanpham.index',['namesanpham'=>$text,'id'=>$id_sp]);
										@endphp
										<div class="col-xs-6 col-sm-4 col-md-4 col-lg-20 custom-mobile mb_margin">
											<div class="wrp_item_small product-col">
												<div class="product-box">
													<div class="product-thumbnail">
													@if($giam > 0)<span class="sale-off">-{{$giam}}%</span>@endif
														<a class="image_link display_flex" href="{{$url}}" title="{{$namesp}}">
															<img src="/storage/app/files/{{$picture}}" data-lazyload="/storage/app/files/{{$picture}}" alt="{{$namesp}}" class="_item">
														</a>
														<div class="product-action-grid clearfix">
															<form class="variants form-nut-grid">
																<div>
																	<button class="btn-cart button_wh_40 left-to" title="Mua ngay" type="button" onclick="giohang('{{$id_sp}}')">Mua ngay</button>
																	<!--onclick="cart.add(, 1)"></button>-->
																	<a href="{{$url}}" class="button_wh_40 btn_view right-to quick-view">
																		<i class="fa fa-eye"></i>
																		<span class="style-tooltip">Xem</span>
																	</a>
																</div>
															</form>
														</div>
													</div>
													<div class="product-info effect a-left">
														<div class="info_hhh">
															<h3 class="product-name ">
																<a href="{{$url}}" title="Quần jean nam Mốt Trẻ phong cách SID23131">{{$namesp}}</a>
															</h3>
															<div class="reviews-product-grid">
																<div class="zozoweb-product-reviews-badge">
																	<div class="zozoweb-product-reviews-star" data-score="0" data-number="5" style="color: rgb(255, 190, 0);">
																		<i data-alt="1" class="star-off-png"></i>&nbsp;
																		<i data-alt="2" class="star-off-png"></i>&nbsp;
																		<i data-alt="3" class="star-off-png"></i>&nbsp;
																		<i data-alt="4" class="star-off-png"></i>&nbsp;
																		<i data-alt="5" class="star-off-png"></i>&nbsp;
																	</div>
																</div>
															</div>
															<div class="price-box clearfix">
																<span class="price product-price">{{$giamgia}}đ</span>
																<span style="height:12px;" class="price product-price-old">@if($giam > 0){{$giaban}}đ@endif</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
@endforeach
@endsection

@section('modal')

@endsection

@section('js')
<script>
	$(document).ready(function() {
		/*$('#section-verticalmenu').addClass('active-desk');*/
		if ($(window).width() > 991) {
			$('#section-verticalmenu').addClass('active');
		}
		$(window).resize(function() {
			if ($(window).width() > 991) {
				$('#section-verticalmenu').addClass('active');
			} else {
				$('#section-verticalmenu').removeClass('active');
			}
		});
	});
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