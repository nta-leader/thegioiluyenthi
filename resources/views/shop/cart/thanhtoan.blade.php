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
							<span itemprop="title">Thanh toán</span>
						</a>
					</li>                   
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

@section('detail')
<style type="text/css">
    .ajax-load-qa {
    background: url("https://2.bp.blogspot.com/-K6t6oBc4jd0/WC1H9h6QBWI/AAAAAAAAAMU/A0C5q9w-mwkVQf_HlezvaJ0lftPP1u9jwCLcB/s1600/loading%2B%25283%2529.gif") no-repeat center center rgba(255,255,255,0.5);
    position: fixed;
    z-index: 100;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    display: none;
    z-index: 1000000000;
}
</style>
<div class="ajax-load-qa" id="loading"></div>
<link href="{{$urlShop}}/catalog/view/theme/default/stylesheet/checkout.css" rel="stylesheet" />

<div class="container">
    <div class="page-information margin-bottom-50">
        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="row">
                    <form method="post" action="{{route('shop.cart.dathang')}}" name="checkout_form" id="checkout_form" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
                        <div class="col-sm-8">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="fa fa-credit-card" aria-hidden="true"></i> Phương thức thanh toán
                                    </h3>
                                </div>
                                <div class="panel-body" id="form_payment_method">
                                    @if($errors->has('thanhtoan'))
                                    <div class="form-group required">
                                        @foreach($errors->get('thanhtoan') as $error)
                                        <span style="color:red; margin-left:37px;">{{$error}}</span><br>
                                        @endforeach
                                    </div>
                                    @endif
                                    <div class="group">
                                        <div class="adr-oms radio select-method" id="taikhoanweb">
                                            <input type="radio" id="payment-method-bank_transfer" name="thanhtoan" value="1">
                                            <label onclick="check()" for="payment-method-bank_transfer">
                                                <div class="adr-oms payment-method">
                                                    <div class="thumbnail">
                                                        <img alt="Chuyển khoản" src="{{$urlShop}}/catalog/view/theme/default/image/payment/bank_transfer.png">
                                                    </div>
                                                    <div class="description">
                                                        <div class="title">Tài khoản web</div>
                                                        <div class="subtitle">Sử dụng tài khoản web để mua </div>
                                                        <div class="tkz-selection-info"></div>
                                                    </div>
                                                </div>
                                            </label>
                                            <div id="thongbao" class="payment-method-toggle box-installment installment-disabled" id="payment-method-info-bank_transfer" style="display: none;">
                                                <div id="noidung" class="disabled-cod-body">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group">
                                        <div class="adr-oms radio select-method">
                                            <input type="radio" id="payment-method-cod" name="thanhtoan" value="0">
                                            <label for="payment-method-cod">
                                                <div class="adr-oms payment-method">
                                                    <div class="thumbnail">
                                                        <img alt="Thu tiền tại nhà (COD)" src="{{$urlShop}}/catalog/view/theme/default/image/payment/cod.png">
                                                    </div>
                                                    <div class="description">
                                                        <div class="title">Thu tiền tại nhà (COD)</div>
                                                        <div class="subtitle">Khách hàng thanh toán bằng tiền mặt cho nhân viên giao hàng khi sản phẩm được chuyển tới địa chỉ nhận hàng</div>
                                                        <div class="tkz-selection-info"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i> Địa chỉ nhận hàng
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <!-- Apply for VN -->
                                    @if($errors->has('name'))
                                    <div class="form-group required">
                                        <label class="control-label col-md-2" for="input-firstname"></label>
                                        <div class="col-sm-10">
                                            @foreach($errors->get('name') as $error)
                                            <span style="color:red;">{{$error}}</span><br>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif
                                    <div class="form-group required">
                                        <label class="control-label col-md-2" for="input-firstname">Tên đầy đủ</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" id="input-firstname" value="{{old('name')}}" placeholder="Ví dụ: Nguyễn Văn A" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            @if($errors->has('email'))
                                            <div class="form-group required">
                                                <label class="control-label col-sm-4" for="input-email"></label>
                                                <div class="col-sm-8">
                                                    @foreach($errors->get('email') as $error)
                                                    <span style="color:red;">{{$error}}</span><br>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endif
                                            <div class="form-group required">
                                                <label class="control-label col-sm-4" for="input-email">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="email" name="email" value="{{old('email')}}" id="input-email" placeholder="contact@yourdomain.com" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            @if($errors->has('phone'))
                                            <div class="form-group required">
                                                <label class="control-label col-sm-4" for="input-telephone"></label>
                                                <div class="col-sm-8">
                                                    @foreach($errors->get('phone') as $error)
                                                    <span style="color:red;">{{$error}}</span><br>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endif
                                            <div class="form-group required">
                                                <label class="control-label col-sm-4" for="input-telephone">Điện thoại</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="phone" id="input-telephone" value="{{old('phone')}}" placeholder="Ví dụ: 01234567890" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            @if($errors->has('address'))
                                            <div class="form-group required">
                                                <label class="control-label col-md-2" for="input-countryid"></label>
                                                <div class="col-md-10">
                                                    @foreach($errors->get('address') as $error)
                                                    <span style="color:red;">{{$error}}</span><br>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endif
                                            <div class="form-group required">
                                                <label class="control-label col-md-2" for="input-countryid">Địa chỉ</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="address" id="input-telephone" value="{{old('address')}}" placeholder="Ví dụ: 203 Ông Ích khiêm Quận Thanh Khê Đà Nẵng" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="input-zoneid" id="label-zone">Lời nhắn</label>
                                        <div class="col-sm-10">
                                            <textarea name="comment"  id="input-comment" rows="3" class="form-control" placeholder="Ví dụ: Chuyển hàng ngoài giờ hành chính">{{old('comment')}}</textarea>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                    <i class="fa fa-truck" aria-hidden="true"></i> Vận chuyển
                                </h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <span id="ajax-load-shipping-method">
                                                <div><strong>Phí giao hàng tận nơi</strong></div>
                                                <div class="radio">
                                                    <label><input type="radio" name="shipping_method" onclick="updateFee()" value="geo.geo" checked=""> Phí giao hàng tận nơi - 0đ</label>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-tag" aria-hidden="true"></i> Sử dụng mã giới thiệu</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <span id="show_notice_coupon"></span>
                                            <div class="input-group">
                                                <input id="code" type="text" name="code" value="" placeholder="Nhập mã giới thiệu" id="input-coupon" class="form-control">
                                                <span class="input-group-btn">
                                                    <input onclick="check_code()" class="btn btn-primary" type="button" value="Áp dụng" id="button-coupon" data-loading-text="Đang áp dụng">
                                                </span>
                                            </div>
                                            <p style="color:red;margin-top: 20px;margin-bottom: -3px;margin-left: 16px;" id="check_code"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default" id="ajax-load-total">
                                <div class="panel-body">
                                    <table class="adr-oms table">
                                        <tbody class="orderSummary">
                                            <tr class="row-total-amount">
                                                <td class="text-left">Thành tiền</td>
                                                <td class="text-right">
                                                    <strong class="total_money">{{ number_format(Session('tongtien'),0) }}đ</strong>
                                                </td>
                                            </tr>
                                            <tr class="row-total-amount">
                                                <td class="text-left">Phí giao hàng tận nơi</td>
                                                <td class="text-right">
                                                    <strong class="">0đ</strong>
                                                </td>
                                            </tr>
                                            <tr class="row-total-amount">
                                                <td class="text-left">Tổng số</td>
                                                <td class="text-right">
                                                    <strong class="total_money">{{ number_format(Session('tongtien'),0) }}đ</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="text-center">
                                <button onclick="loading()" class="btn btn-primary pull-right" type="submit" id="submit_form_button">Đặt hàng <i class="fa fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function loading(){
        document.getElementById('loading').style.display="block";
    }
    function check(){
        document.getElementById("loading").style.display = "block";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{route('shop.cart.check')}}',
            type: 'post',
            cache: false,
            data: {},
            success: function(data){
                document.getElementById("thongbao").style.display = "block";
                document.getElementById("loading").style.display = "none";
                $('#noidung').html(data);
            },
            error: function (){
                alert('Có lỗi xảy ra');
            }
        });
    }
    function check_code(){
        document.getElementById("loading").style.display = "block";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{route('shop.cart.check_code')}}',
            type: 'post',
            cache: false,
            data: {
                code: document.getElementById("code").value,
            },
            success: function(data){
                document.getElementById("thongbao").style.display = "block";
                document.getElementById("loading").style.display = "none";
                if(data == 1){
                    $('#check_code').html('Mã giới thiệu hợp lệ !');
                    $('#check_code').css("color","#1891c3");
                }else if(data == 0){
                    $('#check_code').html('Mã giới thiệu không tồn tại !');
                    $('#code').val("");
                }else{
                    $('#check_code').html('Bạn không thể giới thiệu cho chính bạn !');
                    $('#code').val("");
                }
            },
            error: function (){
                alert('Có lỗi xảy ra');
            }
        });
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