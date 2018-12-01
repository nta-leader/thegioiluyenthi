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
<link href="{{$urlShop}}/ao-nam.html" rel="canonical" />
<link href="{{$urlShop}}/image/catalog/cart.png" rel="icon" />
<link href="{{$urlShop}}/catalog/view/theme/bigboom/stylesheet_custom/stylesheet.css" rel="stylesheet" />
@endsection
@section('duongdan')
@php
    if( isset($name_cat->id_cat) ){
        $namecat=$name_cat->namecat;
        $search=$name_cat->search;
	    $text=editString($namecat);
        $url=route('shop.cat.index',['namecat'=>$text,'id'=>$name_cat->id_cat]);
    }else{
        $namecat=$name_cat['namecat'];
        $search=$name_cat['search'];
	    $text=editString($namecat);
        $url="";
    }	
@endphp
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
						<a itemprop="url" href="{{$url}}">
							<span itemprop="title">{{$namecat}}</span>
						</a>
					</li>                   
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

@section('detail')
<div class="container">
    <div class="row">
        <div class="main-category-page col-md-12 col-sm-12 col-xs-12 no-padding">
            <div id="content" class="col-sm-12 col-xs-12 col-md-9 col-md-push-3 section-main-products padding-small main_container collection margin-bottom-30">
                <div class="text-sm-left">
                    <div class="tt">
                        <h1 class="title-head margin-top-0">{!! Request::is('tim-kiem*') ? $search : $namecat !!}</h1>
                    </div> 
                </div>
                <div class="category-products products">
                    <div class="sortPagiBar">
                        <div class="srt">
                            <div class="wr_sort col-md-4 col-sm-6 col-xs-12 pull-right">
                                <div class="text-sm-right">
                                    <div id="sort-by" class="sorby_xxx">
                                        <label class="left">Sắp xếp theo: </label>
                                        <ul>
                                            <li class="toggle-sort">
                                                <div class="transparent-background"></div>
                                                @php
                                                    $arSapxep=[
                                                        "gc-gt"=>"Giá (Cao - Thấp)",
                                                        "gt-gc"=>"Giá (Thấp - Cao)",
                                                        "spm-spc"=>"Sản phẩm(Mới-Cũ)",
                                                        "spc-spm"=>"Sản phẩm(Cũ-Mới)",
                                                        "ggc-ggt"=>"Giảm giá(Cao-Thấp)",
                                                        "ggt-ggc"=>"Giảm giá(Thấp-Cao)"
                                                    ];
                                                @endphp
                                                @if(Session::has('sapxep'))
                                                    <span>{{ $arSapxep[Session::get('sapxep')] }}</span>
                                                @else
                                                    <span>Sản phẩm(Mới-Cũ)</span>
                                                @endif                                             
                                                <ul class="content-sort off">
                                                    <li>
                                                        <a href="?sapxep=gc-gt">Giá (Cao - Thấp)</a>
                                                    </li>
                                                    <li>
                                                        <a href="?sapxep=gt-gc">Giá (Thấp - Cao)</a>
                                                    </li>
                                                    <li>
                                                        <a href="?sapxep=spm-spc">Sản phẩm(Mới-Cũ)</a>
                                                    </li>
                                                    <li>
                                                        <a href="?sapxep=spc-spm">Sản phẩm(Cũ-Mới)</a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="?sapxep=ggc-ggt">Giảm giá(Cao-Thấp)</a>
                                                    </li>
                                                    <li>
                                                        <a href="?sapxep=ggt-ggc">Giảm giá(Thấp-Cao)</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $('.toggle-sort').click(function() {
                                var content = $(this).find('.content-sort');
                                var background = $(this).find('.transparent-background');
                                if (content.hasClass('on')) {
                                    content.removeClass('on');
                                    content.addClass('off');
                                    background.removeClass('fix');
                                } else {
                                    content.removeClass('off');
                                    content.addClass('on');
                                    background.addClass('fix');
                                }
                            });
                            $('.transparent-background').click(function() {
                                if ($(this).hasClass('fix')) {
                                    $(this).closest('.content-sort').removeClass('on');
                                    $(this).closest('.content-sort').addClass('off');
                                    $(this).removeClass('fix');
                                }
                            });
                        </script>
                    </div>
                    <section class="products-view products-view-grid collection_reponsive">
                        <div class="row-small row">
                        	@foreach($objItems as $objItem)  
							@php
								$id_sp=$objItem->id_sp;
								$namesp=$objItem->namesp;
								$picture=$objItem->picture;
								$giaban=$objItem->gia;
								$giam=$objItem->giamgia;
								$giamgia=number_format($giaban*(100-$giam)/100,0,'.',',');
								$giaban=number_format($objItem->gia,0,'.',',');
								$text=editString($namesp);
								$url=route('shop.sanpham.index',['namesanpham'=>$text,'id'=>$id_sp]);
							@endphp
                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 padding-small">
                                <div class="product-col">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
											@if($giam != 0)
                                            <span class="sale-off">-{{$giam}}%</span>
											@endif
                                            <a class="image_link display_flex" href="{{$url}}" title="{{$namesp}}">
                                                <img class="_item" src="/storage/app/files/{{$picture}}" data-lazyload="/storage/app/files/{{$picture}}" alt="{{$namesp}}">
                                            </a>
                                            <div class="product-action-grid clearfix">
                                                <form class="variants form-nut-grid">
                                                    <div>
                                                        <button class="btn-cart button_wh_40 left-to" title="Mua ngay" type="button" onclick="giohang('{{$id_sp}}')">Mua ngay</button>
                                                        <!--onclick="cart.add(, 1)"></button>-->
                                                        <a title="Xem" href="{{$url}}" class="button_wh_40 btn_view right-to quick-view">
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
													@if($giam != 0)
                                                    <span class="price product-price-old">{{$giaban}}đ</span>
													@endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							@endforeach
                        </div>
						
                        <div class="text-right">
						{{$objItems->links()}}
						</div>
                    </section>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-3 sidebar section-main-sidebar padding-small margin-bottom-50 clearfix col-md-pull-9">
                <aside id="column-left" class="left-column compliance dqdt-sidebar sidebar left-content article-sidebar left">
                    <aside class="aside-item sidebar-category collection-category">
                        <div class="aside-title">
                            <h2 class="title-head margin-top-0">
								<span>Danh mục</span>
							</h2>
                        </div>
                        <div class="aside-content">
                            <nav class="nav-category navbar-toggleable-md">
                                <ul class="nav navbar-pills">
									@php danhmuc_detail($objCats) @endphp
                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <div class="" id="filter-57095285">
                        <form name="filter_form" method="post" action="#" class="aside-filter">


                            <div class="panel-footer text-right hidden">
                                <button type="button" id="button-filter" class="btn btn-primary"></button>
                            </div>
                        </form>
                    </div>
                    <script type="text/javascript">
                        function loadFilter() {
                            var url = 'ao-nam.html';
                            var arr = [];

                            var price = $('input[name^=\'price\']:checked').val();
                            if (price != null) {
                                arr.push('price_filter=' + price);
                            }

                            var manufacturer = [];
                            $('input[name^=\'manufacturer\']:checked').each(function(element) {
                                manufacturer.push(this.value);
                            });

                            if (manufacturer.length != 0) {
                                arr.push('manufacturer_filter=' + manufacturer.join(','));
                            }

                            var option = [];
                            $('input[name^=\'option\']:checked').each(function(element) {
                                option.push(this.value);
                            });

                            if (option.length != 0) {
                                arr.push('option_filter=' + option.join(','));
                            }

                            if (arr.length > 0) {
                                var path = arr.join('&');
                                location = (url.indexOf('?') >= 0) ? url + '&' + path : url + '?' + path;
                            }
                        }
                    </script>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    /* Sau khi tat khung popup cart, cap nhat lai gio hang tren header */
    $('.bs-popupcart-modal-lg').on('hidden.bs.modal', function (e) {
        $.ajax({
            url       : 'index.php?route=checkout/cart/getTotalProductInCart',
            type      : 'post',
            dataType  : 'json',
            beforeSend: function () {
            },
            complete  : function () {
            },
            success   : function (json) {
                var out = json['total'].substr(0, json['total'].indexOf(' '));
                $('#cart-total').html(out);
                $('#cart > ul').load('index1e1c.html?route=common/cart/info%20ul%20li');
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
