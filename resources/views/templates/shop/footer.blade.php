<footer class="footer">
        <div class="site-footer">
            <div class="newsletter-footer">
                <div class="container">
                    <div class="row">
                        <div class="block-banner-left col-md-6 hidden-sm hidden-xs">
                            <img class="img-responsive" src="{{$urlShop}}/image/catalog/banner/banner-newsletter.png" alt="Đăng ký nhận tin">
                        </div>
                        <div class="block-subscribe col-md-6 col-sm-12 col-xs-12">
                            <div class="footer-widget no-border">
                                <form action="https://bigboom.myzozo.net/index.php?route=tool/newsletter" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                    <input type="email" value="" class="email" placeholder="Nhập email tại đây..." name="email" id="mail-footer" aria-label="">
                                    <button class="btn subscribe" name="subscribe" id="subscribe-footer">
                                        <span>Đăng ký!</span>
                                    </button>
                                </form>
                                <div class="valid"></div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                var id = '#mc-embedded-subscribe-form';
                                $(id).on('submit', function() {
                                    var email = $(id + ' .email').val();
                                    if (!isValidEmailAddress(email)) {
                                        $(id + ' + .valid').html("Email không hợp lệ");
                                        $(id + ' .email').focus();
                                        return false;
                                    }
                                    var url = "indexd801.json?route=tool/newsletter";
                                    $.ajax({
                                        type: "post",
                                        url: url,
                                        data: $(id).serialize(),
                                        dataType: 'json',
                                        success: function(json) {
                                            $(".success_inline, .warning_inline, .error").remove();
                                            if (json['error']) {
                                                $(id + ' + .valid').html(json['error']);
                                            }
                                            if (json['success']) {
                                                $(id + ' + .valid').html(json['success']);
                                                $(id)[0].reset();
                                            }
                                        }
                                    });
                                    return false;
                                });
                            });

                            function isValidEmailAddress(emailAddress) {
                                var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
                                return pattern.test(emailAddress);
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="top-footer mid-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-7 col-md-4 width-320">
                            <h4 class="title-menu" style="font-family: Roboto, HelveticaNeue, &quot;Helvetica Neue&quot;, sans-serif; font-weight: bold; line-height: normal; color: rgb(54, 54, 54); margin: 40px 0px 30px; font-size: 16px; letter-spacing: 0.5px; cursor: default; position: relative; background-color: rgb(245, 245, 245);">Hệ thống cửa hàng</h4>
                            <h4 class="title-menu4 icon_none_first" style="font-family: Roboto, HelveticaNeue, &quot;Helvetica Neue&quot;, sans-serif; line-height: normal; color: rgb(255, 255, 255); margin: 10px 0px 5px; font-size: 1.28571em; letter-spacing: 0.5px; position: relative;"><a style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(112, 112, 112); transition: all 150ms ease-in-out; font-weight: bold; cursor: default; font-size: 14px; position: relative;">Trụ sở TP.Hồ Chí Minh:</a></h4>
                            <h4 class="title_block" style="font-family: Arial, sans-serif; line-height: 18px; text-transform: uppercase; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 18px; position: relative;"><div class="collapse1" id="collapseListMenu01" style="color: rgb(85, 85, 85); font-family: Roboto, HelveticaNeue, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14px; text-transform: none; background-color: rgb(245, 245, 245);"><div class="list-menu" style="line-height: 30px;"><div class="widget-ft wg-logo" style="margin-bottom: 20px;"><div class="item"><ul class="contact contact_x" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none outside;"><li style="font-family: Arial, sans-serif; position: relative; color: rgb(112, 112, 112); margin-bottom: 20px; line-height: 20px;"><span class="txt_content_child" style="display: inherit;">180 - 182 Lý Chính Thắng, Phường 9, Q.3</span></li></ul></div></div></div></div></h4>
                            <h4 class="title-menu4 icon_none_first" style="font-family: Roboto, HelveticaNeue, &quot;Helvetica Neue&quot;, sans-serif; line-height: normal; color: rgb(255, 255, 255); margin: 10px 0px 5px; font-size: 1.28571em; letter-spacing: 0.5px; position: relative;"><a style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(112, 112, 112); transition: all 150ms ease-in-out; font-weight: bold; cursor: default; font-size: 14px; position: relative;">Chi nhánh Hà Nội</a></h4>
                            <h4 class="title_block" style="font-family: Arial, sans-serif; line-height: 18px; text-transform: uppercase; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 18px; position: relative;"><div class="collapse1" style="color: rgb(85, 85, 85); font-family: Roboto, HelveticaNeue, &quot;Helvetica Neue&quot;, sans-serif; font-size: 14px; text-transform: none; background-color: rgb(245, 245, 245);"><div class="list-menu" style="line-height: 30px;"><div class="widget-ft wg-logo" style="margin-bottom: 20px;"><div class="item"><ul class="contact contact_x" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none outside;"><li style="font-family: Arial, sans-serif; position: relative; color: rgb(112, 112, 112); margin-bottom: 20px; line-height: 20px;"><span class="txt_content_child" style="display: inherit;">Tầng 4, số 01, ngõ 120 Trường Chinh, Phương Mai, Q.Đống Đa, Hà Nội</span></li></ul></div></div></div></div></h4> </div>
                        <div class="col-xs-12 col-sm-5 col-md-3">
                            <div class="widget-ft">
                                <h4 class="title-menu tittle_time">Điện thoại:</h4>
                                <div class="time_work">
                                    <ul class="list-menu">
                                        <li class="li_menu li_menu_xxx">
                                            <a class="rc yeloww" href="tel:0123 456 789">0123 456 789</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="socials-footer">
                                <h4 class="title-menu tittle_time">Theo dõi chúng tôi</h4>
                                <div class="social_content">
                                    <ul class="list-unstyled">
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/FacebookVietnam" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li class="youtube">
                                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <div class="col-xs-12 col-sm-5 col-md-2 width-320">
                            <div class="widget-ft">
                                <h4 class="title-menu">Thông tin</h4>
                                <div class="collapse1" id="collapseListMenu02">
                                    <ul class="list-menu list-menu22">
                                        <li class="li_menu">
                                            <a href="gioi-thieu.html">Giới thiệu</a>
                                        </li>
                                        <li class="li_menu">
                                            <a href="van-chuyen.html">Chính sách vận chuyển</a>
                                        </li>
                                        <li class="li_menu">
                                            <a href="quy-dinh.html">Quy định &amp; Chính sách</a>
                                        </li>
                                        <li class="li_menu">
                                            <a href="chinh-sach-bao-mat.html">Chính sách bảo mật</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-3">
                            <div class="widget-ft">
                                <h4 class="title-menu"></h4>
                                <div class="fb-page" data-href="https://www.facebook.com/FacebookVietnam" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright clearfix">
                <div class="container">
                    <div class="inner clearfix">
                        <div class="row tablet">
                            <div id="copyright" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-center fot_copyright">
                                <span class="wsp">&copy; Copyright 2018 BigBoom. Thiết kế bởi <a target="_blank" href="https://www.zozo.vn/?utm_source=bigboom.myzozo.net&amp;utm_medium=referral&amp;utm_campaign=copyrightwebdesign&amp;utm_term=footerurl&amp;utm_content=footer">Zozo</a></span>
                            </div>
                        </div>
                    </div>
                    <a href="#" id="back-to-top" class="backtop" title="TOP"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <link rel="stylesheet" href="{{$urlShop}}/catalog/view/theme/default/stylesheet/social_login_button.css" />
    <div class="modal fade bs-popupcart-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button style="position: relative;z-index: 9999;" type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="myModalLabel" style="padding-left: 10px;">
                        <i class="fa fa-shopping-cart"aria-hidden="true"></i> Giỏ hàng            
                    </h4>
                </div>
                <div class="modal-body" style="position: relative;" >
                    <div id="loading" class="loading" style="display:none; position: absolute;z-index: 1000000;width: 96%;height: 100%;">
                        <center>
                        <img style="margin-top:10%; position: absolute" width="50px" src="{{$urlShop}}/loader.gif">
                        </center>
                    </div>
                    <div id="view_cart">

                    </div>
                </div>
                <div class="modal-footer" style="border-top: none;">    
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 col_button_checkout">
                                <a id="payment" href="{{route('shop.cart.thanhtoan')}}" class="btn btn-primary pull-right button_checkout">Tiến hành thanh toán</a>
                            </div>
                            <div class="col-sm-6 col-xs-6 col_button_shopping">
                                <a href="{{route('shop.cart.huy')}}" class="btn btn-primary pull-left button_shopping">Hủy giỏ hàng</a>
                            </div>               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{$urlShop}}/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="{{$urlShop}}/sweetalert.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div id="js"></div>
    <script type="text/javascript">
        function giohang(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{route('shop.cart.add')}}',
                type: 'post',
                cache: false,
                data: {
                    id_sp:id,
                },
                success: function(data){
                    $('#js').html(data);
                },
                error: function (){
                    alert('Có lỗi xảy ra');
                }
            });
        }
        function view_cart(){
            document.getElementById("loading").style.display = "block";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{route('shop.cart.index')}}',
                type: 'post',
                cache: false,
                data: {},
                success: function(data){
                    $('#view_cart').html(data);
                    document.getElementById("loading").style.display = "none";
                },
                error: function (){
                    alert('Có lỗi xảy ra');
                }
            });
        }
        function cong(id){
            document.getElementById("loading").style.display = "block";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{route('shop.cart.cong')}}',
                type: 'post',
                cache: false,
                data: {
                    id_sp:id,
                },
                success: function(data){
                    $('#view_cart').html(data);
                    document.getElementById("loading").style.display = "none";
                },
                error: function (){
                    alert('Có lỗi xảy ra');
                }
            });
        }
        function tru(id){
            document.getElementById("loading").style.display = "block";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{route('shop.cart.tru')}}',
                type: 'post',
                cache: false,
                data: {
                    id_sp:id,
                },
                success: function(data){
                    $('#view_cart').html(data);
                    document.getElementById("loading").style.display = "none";
                },
                error: function (){
                    alert('Có lỗi xảy ra');
                }
            });
        }
        function del(id){
            document.getElementById("loading").style.display = "block";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{route('shop.cart.del')}}',
                type: 'post',
                cache: false,
                data: {
                    id_sp:id,
                },
                success: function(data){
                    $('#view_cart').html(data);
                    document.getElementById("loading").style.display = "none";
                },
                error: function (){
                    alert('Có lỗi xảy ra');
                }
            });
        }
    </script>
    @yield('js')
</body>
</html>
