@include('templates.shop.header')
<div class="container">
@yield('content')  
</div>
@yield('duongdan')
@yield('detail') 
<div class="container-fluid">
    <div class="row">
        <div id="content" class="col-sm-12 col-xs-12 col-md-12">
            <div class="row">
            <!-- trang index sư dung -->
                @yield('tieubieu')
                @yield('new')
                <section class="awe-section-10 " id="service-1037927328">
                    <section class="section_service_end">
                        <div class="container">
                            <div class="row row-noGutter-2">
                                <div class="col-item-srv col-md-4 col-sm-12 col-xs-12">
                                    <div class="service_item_ed">
                                        <span class="iconx">
                                            <img src="{{$urlShop}}/image/cache/catalog/services/srv-1-0x0.png" alt="Giao hàng cực nhanh" class="fa">
                                        </span>
                                        <div class="content_srv">
                                            <span class="title_service">Giao hàng cực nhanh</span>
                                            <span class="content_service">Miễn phí với đơn hàng trị giá trên 800.000đ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-item-srv col-md-4 col-sm-12 col-xs-12">
                                    <div class="service_item_ed">
                                        <span class="iconx">
                                            <img src="{{$urlShop}}/image/cache/catalog/services/srv-2-0x0.png" alt="Giao hàng cực nhanh" class="fa">
                                        </span>
                                        <div class="content_srv">
                                            <span class="title_service">Giao hàng cực nhanh</span>
                                            <span class="content_service">Miễn phí với đơn hàng trị giá trên 800.000đ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-item-srv col-md-4 col-sm-12 col-xs-12">
                                    <div class="service_item_ed">
                                        <span class="iconx">
                                            <img src="{{$urlShop}}/image/cache/catalog/services/srv-3-0x0.png" alt="Sản phẩm chính hãng 100%" class="fa">
                                        </span>
                                        <div class="content_srv">
                                            <span class="title_service">Sản phẩm chính hãng 100%</span>
                                            <span class="content_service">Sản phẩm được nhập khẩu chính hãng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </div>
</div>
@include('templates.shop.footer')