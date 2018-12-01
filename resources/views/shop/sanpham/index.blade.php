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

@php
    $id_sp=$objItem_sp->id_sp;
    $ma_sp=$objItem_sp->ma_sp;
    $namesp=$objItem_sp->namesp;
    $preview=$objItem_sp->preview_text;
    $picture=$objItem_sp->picture;
    $giaban=$objItem_sp['gia'];
    $giam=$objItem_sp['giamgia'];
    $giamgia=number_format($giaban*(100-$giam)/100,0,'.',',');
    $giaban=number_format($objItem_sp['gia'],0,'.',',');
    $detail=$objItem_sp->detail_text;
    $chiase=$objItem_sp->chiase;
    $namecat=editString($name_cat->namecat);
@endphp

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
						<a itemprop="url" href="{{route('shop.cat.index',['namecat'=>$namecat,'id'=>$name_cat->id_cat])}}">
							<span itemprop="title">{{$name_cat->namecat}}</span>
						</a>
						<span><i class="fa">/</i></span>
					</li>
                    <li>{{$namesp}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

@section('detail');
<section class="product" itemscope itemtype="http://schema.org/Product">
    <div class="container">
        <div class="main-product-page">
            <div class="row">
                <div class="details-product">
                    <div id="content" class="col-sm-12 col-xs-12 col-md-9 col-md-push-3">
                        <div class="rows">
                            <div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-5 col-lg-5">
                                <div class="row">
                                    <!-- product images -->
                                    <div class="col_large_default large-image">
                                        <a href="/storage/app/files/{{$picture}}" class="large_image_url checkurl" data-rel="prettyPhoto[product-gallery]">
                                            <img  id="img_01" class="img-responsive" alt="Áo hoodie nữ chữ thêu thời trang SID53235" src="/storage/app/files/{{$picture}}" data-zoom-image="/storage/app/files/{{$picture}}" />
                                        </a>
                                        <div class="hidden">
                                        </div>
                                    </div>
                                    <!-- product thumbs -->
                                    <div class="product-detail-thumb">
                                        <div id="gallery_02" class="owl-carousel owl-theme thumbnail-product thumb_product_details not-dqowl" data-loop="false" data-lg-items="4" data-md-items="4" data-sm-items="3" data-xs-items="3" data-xxs-items="3">
                                            <div class="item">
                                                <a href="#" data-image="/storage/app/files/{{$picture}}" data-zoom-image="/storage/app/files/{{$picture}}">
                                                    <img data-img="/storage/app/files/{{$picture}}" src="/storage/app/files/{{$picture}}" alt="Áo hoodie nữ chữ thêu thời trang SID53235">
                                                </a>
                                            </div>
                                            @foreach($objItem_anh as $objItem)
                                            @php
                                                $picture=$objItem->namep;
                                            @endphp
                                            <div class="item">
                                                <a href="#" data-image="/storage/app/files/{{$picture}}" data-zoom-image="/storage/app/files/{{$picture}}">
                                                    <img data-img="/storage/app/files/{{$picture}}" src="/storage/app/files/{{$picture}}" alt="Áo hoodie nữ chữ thêu thời trang SID53235">
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 details-pro">
                                <h1 class="title-product">{{$namesp}}</h1>
                                <div>
                                    
                                </div>
                                <div class="group-status">
                                    <span class="first_status">Mã sản phẩm:
                                        <span class="status_name">{{$ma_sp}}</span>
                                    <span class="space">&nbsp; | &nbsp;</span>
                                    </span>
                                    <span class="first_status">
                                        Tình trạng:
                                        <span class="status_name availabel">Còn trong kho</span>
                                    </span><br>
                                    <button onclick="chiase('{{$id_sp}}','{{$namesp}}')">Chia sẻ( Nhận hoa hồng {{$chiase}}%)</button>
                                    <div id="chiase"></div>
                                </div>
                                <div class="reviews_details_product">
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
                                <div class="price-box" itemscope itemtype="http://schema.org/Offer">
                                    <span class="special-price">
                                        <span class="price product-price" itemprop="price">{{$giamgia}}đ</span>
                                    </span>
                                    @if($giam != 0)
                                    <span class="old-price">
                                        <del class="price product-price-old" itemprop="priceSpecification">{{$giaban}}đ</del>
                                    </span>
                                    @endif
                                </div>
                                <div class="product-summary product_description margin-bottom-0">
                                    {!!$preview!!}
                                </div>
                                <div id="product" class="form-product col-sm-12">
                                    <div class="form-group form_button_details">
                                        <div class="form_hai ">
                                            <div class="button_actions">
                                                <input type="hidden" name="product_id" value="194" />
                                                <button type="button" onclick="giohang('{{$id_sp}}')" data-loading-text="Đang tải..." class="btn btn-lg btn-block btn-cart button_cart_buy_enable add_to_cart btn_buy">
                                                    <span class="btn-content">Thêm vào giỏ</span>
                                                </button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="block-tab-infor" class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
                            <div class="row margin-top-50 xs-margin-top-15">
                                <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 no-padding">
                                    <div class="product-tab e-tabs">
                                        <ul class="tabs tabs-title clearfix">
                                            <li class="tab-link" data-tab="tab-description">
                                                <h3>
                                                    <span>Mô tả</span>
                                                </h3>
                                            </li>
                                            <li class="tab-link" data-tab="tab-review">
                                                <h3 data-tab="tab-review">
                                                    <span>Đánh giá (0)</span>
                                                </h3>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="tab-description">
                                            <div class="rte">
                                                {!!$detail!!}
                                            </div>
                                        </div>
                                        <div class="tab-content" id="tab-review">
                                            <div class="rte">
                                                <div id="zozoweb-product-reviews" class="zozoweb-product-reviews">
                                                    <div class="">
                                                        <div id="zozoweb-product-reviews-sub">
                                                            <!-- binh luan -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
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
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 related-product margin-top-30 xs-margin-top-0">
                <div class="section_prd_feature">
                    <div class="heading heading_related_h">
                        <h2 class="title-head">
                                <a href="javascript:void(0)">Sản phẩm Liên quan</a>
                            </h2>
                    </div>
                    <div class="row">
                        <div class="products product_related products-view-grid-bb owl-carousel owl-theme products-view-grid not-dot2" data-dot="false" data-nav="false" data-lg-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="30">
                            @foreach($objItems as $objItem)
                            @php
                                $id_sp=$objItem->id_sp;
                                $namesp=$objItem->namesp;
                                $giam=$objItem->giamgia;
                                $giaban=$objItem->gia;
                                $giamgia=number_format($giaban*(100-$giam)/100,0,'.',',');
                                $giaban=number_format($giaban,0,'.',',');
                                $picture=$objItem->picture;
                                $text=editString($namesp);
                                $url=route('shop.sanpham.index',['namesanpham'=>$text,'id'=>$id_sp]);
                            @endphp     
                            <div class="item saler_item col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="owl_item_product product-col">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            @if($giam != 0)
                                            <span class="sale-off">-{{$giam}}%</span>
                                            @endif
                                            <a class="image_link" href="{{$url}}" title="{{$namesp}}">
                                                <img class="_item" src="/storage/app/files/{{$picture}}" data-lazyload="/storage/app/files/{{$picture}}" alt="Kính Mát Nữ USA WF14C" />
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
                                                    <a href="{{$url}}" title="Kính Mát Nữ USA WF14C">{{$namesp}}</a>
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
    function chiase(id_sp,namesp){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{route('shop.sanpham.chiase')}}',
                type: 'post',
                cache: false,
                data: {
                    id_sp:id_sp,
                    namesp:namesp,
                },
                success: function(data){
                    $('#chiase').html(data);
                },
                error: function (){
                    alert('Có lỗi xảy ra');
                }
            });
        }
</script>
<script type="text/javascript">
    $('#review').delegate('.pagination a', 'click', function (e) {
        e.preventDefault();
        $('#review').fadeOut('slow');
        $('#review').load(this.href);
        $('#review').fadeIn('slow');
    });
    //$('#review').load('index6919.html?route=product/product/review&amp;product_id=216');
    $('#button-review').on('click', function () {
        $.ajax({
            url       : 'index.php?route=product/product/write&product_id=216',
            type      : 'post',
            dataType  : 'json',
            data      : $("#form-review").serialize(),
            beforeSend: function () {
                $('#button-review').button('loading');
            },
            complete  : function () {
                $('#button-review').button('reset');
            },
            success   : function (json) {
                $('.alert-success, .alert-danger').remove();
                if (json['error']) {
                    $('#form-review .valid').html('<i class="fa fa-exclamation-circle"></i> ' + json['error']);
                }
                if (json['success']) {
                    $('#form-review .valid').html('<i class="fa fa-check-circle"></i> ' + json['success']);
                    $('input[name=\'name\']').val('');
                    $('input[name=\'email\']').val('');
                    $('textarea[name=\'text\']').val('');
                    $('input[name=\'rating\']:checked').prop('checked', false);
                }
            }
        });
    });
    $(document).ready(function () {
        $('.thumbnails').magnificPopup({
            type    : 'image',
            delegate: 'a',
            gallery : {
                enabled: true
            }
        });
    });
    $('.see-detail').click(function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $("#block-tab-infor").offset().top,
        }, 700);
        return false;
    });
</script>
<script type="text/javascript">
    var ww = $(window).width();
    $(document).ready(function () {
        if (ww >= 1200) {
            $('#img_01').elevateZoom({
                gallery           : 'gallery_02',
                zoomWindowWidth   : 420,
                zoomWindowHeight  : 500,
                zoomWindowOffetx  : 10,
                easing            : true,
                scrollZoom        : true,
                cursor            : 'pointer',
                galleryActiveClass: 'active',
                imageCrossfade    : true
            });
        }
        $("#img_02").click(function (e) {
            e.preventDefault();
            var hr = $(this).attr('src');
            $('#img_01').attr('src', hr);
            $('.large_image_url').attr('href', hr);
            $('#img_01').attr('data-zoom-image', hr);
        });
        $('#gallery_00 img, .swatch-element label').click(function (e) {
            $('.checkurl').attr('href', $(this).attr('src'));
            if (ww >= 1200) {
                setTimeout(function () {
                    $('.zoomContainer').remove();
                    $('#zoom_01').elevateZoom({
                        gallery           : 'gallery_02',
                        zoomWindowWidth   : 420,
                        zoomWindowHeight  : 500,
                        zoomWindowOffetx  : 10,
                        easing            : true,
                        scrollZoom        : true,
                        cursor            : 'pointer',
                        galleryActiveClass: 'active',
                        imageCrossfade    : true
                    });
                }, 300);
            }
        });
        $("#gallery_02").owlCarousel({
            nav               : true,
            dots              : false,
            margin            : 0,
            autoplay          : false,
            autoplayHoverPause: true,
            loop              : false,
            responsive        : {
                0   : {
                    items: 3
                },
                543 : {
                    items: 4
                },
                768 : {
                    items: 4
                },
                991 : {
                    items: 4
                },
                992 : {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });
        $('#gallery_02 img, .swatch-element label').click(function (e) {
            e.preventDefault();
            var ths = $(this).attr('data-img');
            $('.large-image .checkurl').attr('href', ths);
            $('.large-image .checkurl img').attr('src', ths);
            /*** xử lý active thumb -- ko variant ***/
            var thumbLargeimg = $('.details-product .large-image a').attr('href').split('?')[0];
            var thumMedium = $('#gallery_02 .owl-item .item a').find('img').attr('src');
            var url = [];
            $('#gallery_02 .owl-item .item').each(function () {
                var srcImg = '';
                $(this).find('a img').each(function () {
                    var current = $(this);
                    if (current.children().size() > 0) {
                        return true;
                    }
                    srcImg += $(this).attr('src');
                });
                url.push(srcImg);
                var srcimage = $(this).find('a img').attr('src').split('?')[0];
                if (srcimage == thumbLargeimg) {
                    $(this).find('a').addClass('active');
                } else {
                    $(this).find('a').removeClass('active');
                }
            });
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