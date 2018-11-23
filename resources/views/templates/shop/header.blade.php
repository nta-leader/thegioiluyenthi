<!DOCTYPE html>
<html dir="ltr" lang="vi">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#FFFFFF" />
    <title>Thế giới luyện thi</title>
    <base />
    <meta property="og:url" content="index.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="BigBoom" />
    <meta property="og:description" />
    <meta property="og:image" content="image/https_/bigboom.myzozo.net/image/catalog/logo/logo.html" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" />
    <meta name="twitter:title" content="BigBoom" />
    <meta name="twitter:image" content="image/https_/bigboom.myzozo.net/image/catalog/logo/logo.html" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=vietnamese" rel="stylesheet">
    <style>
        ._item{
            width: 160px;
            height: 250px;
            padding: 22px 22px 0px 22px;
        }
    </style>
    @yield('css')
</head>

<body class="common-home">
    <div class="hidden-md hidden-lg opacity_menu"></div>
    <div class="opacity_filter"></div>
    <div id="mySidenav" class="sidenav menu_mobile hidden-md hidden-lg">
        <div class="top_menu_mobile">
            <span class="close_menu">
                    <img src="{{$urlShop}}/image/catalog/logo/logo.png" alt="BigBoom" />
                </span>
        </div>
        <div class="content_memu_mb">
            <div class="link_list_mobile">
                <ul class="ct-mobile hidden"></ul>
                <ul class="ct-mobile">
                    <li class="level0 level-top parent level_ico">
                        <a href="/">Trang chủ</a>
                    </li>
                    <li class="level0 level-top parent level_ico">
                        <a href="{{route('shop.gioithieu.index')}}">Giới thiệu</a>
                    </li>
                    <li class="level0 level-top parent level_ico">
                        <a href="{{route('shop.chinhsach.index')}}">Chính sách</a>
                    </li>
                    <li class="level0 level-top parent level_ico">
                        <a href="{{route('shop.huongdan.index')}}">Hướng dẫn</a>
                    </li>
                    <li class="level0 level-top parent level_ico">
                        <a href="{{route('shop.contact.index')}}">Liên hệ</a>
                    </li>
                    @php
                        $auth=Auth::user();
                    @endphp
                    @if(isset($auth->username))
                    <li class="level0 level-top parent level_ico">
                        <a>Tài khoản</a>
                        <i class="ti-plus hide_close fa fa-sort-down"></i>
                        <ul class="level0 sub-menu" style="display:none;">
                            <li class="level1">
                                <a class="nav-link " href="">
                                    Thông tin tài khoản
                                </a>
                            </li>
                            <li class="level1">
                                <a class="nav-link " href="{{route('shop.user.donhang')}}">
                                    Các đơn hàng đã đặt
                                </a>
                            </li>
                            <li class="level1">
                                <a class="nav-link " href="{{route('shop.user.donhang_gioithieu')}}">
                                    Các đơn hàng bạn giới thiệu
                                </a>
                            </li>
                            <li class="level1">
                                <a class="nav-link " href="{{route('shop.user.history')}}">
                                    Lịch sử
                                </a>
                            </li>
                            <li class="level1">
                                <a class="nav-link " href="">
                                    Đổi mật khẩu
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="top-banner hidden-sm hidden-xs">
            <a href="index.html">
                <img class="img-responsive" src="{{$urlShop}}/image/cache/catalog/banner/img-top-banner-0x0.jpg">
            </a>
        </div>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12"></div>
                    <div class="col-md-6 col-sm-6 d-list col-xs-12 a-right topbar_right">
                        <div class="list-inline a-center f-right">
                            <ul>
                                @if(isset($auth->username))
                                <li>
                                    <a title="{{$auth->money}}đ" class="account_a">
                                        <span>Số dư: {{number_format($auth->money,0)}} đ</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <a href="{{route('shop.user.index')}}" title="{{$auth->username}}" class="account_a">
                                        <span>{{$auth->username}}</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-sign-out"></i>
                                    <a href="{{route('auth.logout')}}" title="Đăng xuất" class="account_a">
                                        <span>Đăng xuất</span>
                                    </a>
                                </li>
                                @else
                                <li>
                                    <i class="fa fa-user"></i>
                                    <a href="{{route('auth.dangky')}}" title="Đăng ký" class="account_a">
                                        <span>Đăng ký</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-lock"></i>
                                    <a href="{{route('auth.login')}}" title="Đăng nhập" class="account_a">
                                        <span>Đăng nhập</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid-header">
            <div class="container">
                <div class="row">
                    <div class="content_header">
                        <div class="header-main">
                            <div class="menu-bar-h nav-mobile-button hidden-md hidden-lg">
                                <a href="#nav-mobile">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="/" class="logo-wrapper ">
                                        <img src="{{$urlShop}}/image/catalog/logo/logo.png" alt="BigBoom">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 no-padding col-sm-12 col-xs-12">
                                <div class="header-left">
                                    <form action="{{route('shop.timkiem')}}">
                                        <div class="header_search header_searchs">
                                            <div class="input-group search-bar" >                                           
                                                <div class="collection-selector">
                                                    <select name="id_cat" class="search_text">          
                                                        <option class="item-cate search_item" value="0">Tất cả</option>
                                                        @php danhmuc_search($objCats) @endphp
                                                    </select>
                                                </div>
                                                <input required type="text" name="search" value="{{ Request::is('tim-kiem*')? Session::get('search') : '' }}" placeholder="Tìm kiếm" class="input-group-field st-default-search-input search-text" autocomplete="off">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn icon-fallback-text">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                </span>                                           
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="header-right">
                                    <div class="header-acount hidden-lg-down">
                                        <div class="wishlist_header hidden-xs hidden-sm">
                                            <div class="img_hotline"><i class="fa fa-phone"></i></div>
                                            <span class="text_hotline">Điện thoại</span>
                                            <a class="phone-order" href="tel:0123 456 789">0123 456 789</a>
                                        </div>
                                        @if(Session::has('soluong'))
                                            @php  
                                                $soluong=Session::get('soluong');
                                                $tongtien=Session::get('tongtien');
                                            @endphp
                                        @else
                                            @php  
                                                $soluong=0;
                                                $tongtien=0;
                                            @endphp
                                        @endif
                                        <div class="top-cart-contain f-right hidden-xs hidden-sm visible-md visible-lg">
                                            <div class="mini-cart text-xs-center" id="cart">
                                                <div class="heading-cart">
                                                    <a onclick="view_cart()" class="bg_cart" data-toggle="modal" data-target=".bs-popupcart-modal-lg" title="Giỏ hàng">
                                                        <span id="soluong" class="absolute count_item count_item_pr">
                                                            {{$soluong}}
                                                        </span>
                                                        <i class="fa fa-shopping-bag"></i>
                                                        <span class="block-small-cart">
                                                            <span class="text-giohang hidden-xs">Giỏ hàng</span>
                                                            <span class="block-count-pr">
                                                                <span id="tongtien" class="count_item count_item_pr price_cart">
                                                                    {{number_format($tongtien,0,".",",")}}đ
                                                                </span>  
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-cart-contain f-right hidden-lg hidden-md visible-xs visible-sm">
                                            <div class="mini-cart text-xs-center">
                                                <div class="heading-cart">
                                                    <a class="bg_cart" onclick="view_cart()" data-toggle="modal" data-target=".bs-popupcart-modal-lg" title="Giỏ hàng">
                                                        <span id="soluong2" class="absolute count_item count_item_pr">{{$soluong}}</span>
                                                        <img alt="Giỏ hàng" src="{{$urlShop}}/catalog/view/theme/bigboom/image/icon-bag.png" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="container ">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 vertical-menu-home">
                        <div id="section-verticalmenu" class="block block-verticalmenu float-vertical float-vertical-left">
                            <div class="bg-vertical"></div>
                            <h4 class="block-title float-vertical-button">
                                    <span class="verticalMenu-toggle"></span>
                                    <span class="verticalMenu-text">Danh mục</span>
                                </h4>
                            <div class="block_content">
                                <div id="verticalmenu" class="verticalmenu" role="navigation">
                                    <ul class="nav navbar-nav nav-verticalmenu">
                                    @php danhmuc($objCats) @endphp
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 bg-header-nav hidden-xs hidden-sm">
                        <div class="relative">
                            <div class="row row-noGutter-2">
                                <nav class="header-nav">
                                    <ul class="item_big">
                                        <li class="nav-item ">
                                            <a class="a-img" href="/">
                                                <span>Trang chủ</span>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="a-img" href="{{route('shop.gioithieu.index')}}">
                                                <span>Giới thiệu</span>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="a-img" href="{{route('shop.chinhsach.index')}}">
                                                <span>Chính sách</span>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="a-img" href="{{route('shop.huongdan.index')}}">
                                                <span>Hướng dẫn</span>
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item ">
                                            <a class="a-img" href="{{route('shop.contact.index')}}">
                                                <span>Liên hệ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>