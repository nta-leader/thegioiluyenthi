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
							<span itemprop="title">Đăng ký</span>
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
        <div id="content" class="col-sm-12 col-xs-12 col-md-12">
            <div class="page-information margin-bottom-50">
                <h1>Đăng ký tài khoản</h1>
                <form action="{{route('auth.dangky')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
					{{csrf_field()}}
                    <fieldset id="account">
                        <legend>Chi tiết tài khoản</legend>
                        @if($errors->has('username'))
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">
                                <img width="20px" src="http://www.lycee-marie-de-champagne.fr/wp-content/uploads/2014/06/Warning-128.png" >
                            </label>
                            <div class="col-sm-10">
                                <p class="form-control" style="color:red; margin: 0;background: no-repeat;border: none;"> 
                                    @foreach($errors->get('username') as $stt => $error)
                                    <span>{{$error}}</span><br>
                                    @endforeach                                   
                                </p>
                            </div>
                        </div>
                        @endif
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">Tên tài khoản</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" value="{{old('username')}}" placeholder="Nhập tên tài khoản" id="input-firstname" class="form-control" >
                            </div>
                        </div>
                        @if($errors->has('password'))
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">
                                <img width="20px" src="http://www.lycee-marie-de-champagne.fr/wp-content/uploads/2014/06/Warning-128.png" >
                            </label>
                            <div class="col-sm-10">
                                <p class="form-control" style="color:red; margin: 0;background: no-repeat;border: none;"> 
                                    @foreach($errors->get('password') as $stt => $error)
                                    <span>{{$error}}</span><br>
                                    @endforeach                                   
                                </p>
                            </div>
                        </div>
                        @endif
						<div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-password">Mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" value="" placeholder="Nhập mật khẩu" id="input-password" class="form-control">
                            </div>
                        </div>
                        @if($errors->has('password2'))
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">
                                <img width="20px" src="http://www.lycee-marie-de-champagne.fr/wp-content/uploads/2014/06/Warning-128.png" >
                            </label>
                            <div class="col-sm-10">
                                <p class="form-control" style="color:red; margin: 0;background: no-repeat;border: none;"> 
                                    @foreach($errors->get('password2') as $stt => $error)
                                    <span>{{$error}}</span><br>
                                    @endforeach                                   
                                </p>
                            </div>
                        </div>
                        @endif
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-confirm">Mật khẩu xác nhận</label>
                            <div class="col-sm-10">
                                <input type="password" name="password2" value="" placeholder="Nhập lại mật khẩu" id="input-confirm" class="form-control">
                            </div>
                        </div>
                        @if($errors->has('fullname'))
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">
                                <img width="20px" src="http://www.lycee-marie-de-champagne.fr/wp-content/uploads/2014/06/Warning-128.png" >
                            </label>
                            <div class="col-sm-10">
                                <p class="form-control" style="color:red; margin: 0;background: no-repeat;border: none;"> 
                                    @foreach($errors->get('fullname') as $stt => $error)
                                    <span>{{$error}}</span><br>
                                    @endforeach                                   
                                </p>
                            </div>
                        </div>
                        @endif
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">Họ tên</label>
                            <div class="col-sm-10">
                                <input type="text" name="fullname" value="{{old('fullname')}}" placeholder="Nhập họ tên !" id="input-firstname" class="form-control">
                            </div>
                        </div>
                        @if($errors->has('email'))
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">
                                <img width="20px" src="http://www.lycee-marie-de-champagne.fr/wp-content/uploads/2014/06/Warning-128.png" >
                            </label>
                            <div class="col-sm-10">
                                <p class="form-control" style="color:red; margin: 0;background: no-repeat;border: none;"> 
                                    @foreach($errors->get('email') as $stt => $error)
                                    <span>{{$error}}</span><br>
                                    @endforeach                                   
                                </p>
                            </div>
                        </div>
                        @endif
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{old('email')}}" placeholder="Nhập email" id="input-email" class="form-control">
                            </div>
                        </div>
                        @if($errors->has('facebook'))
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">
                                <img width="20px" src="http://www.lycee-marie-de-champagne.fr/wp-content/uploads/2014/06/Warning-128.png" >
                            </label>
                            <div class="col-sm-10">
                                <p class="form-control" style="color:red; margin: 0;background: no-repeat;border: none;"> 
                                    @foreach($errors->get('facebook') as $stt => $error)
                                    <span>{{$error}}</span><br>
                                    @endforeach                                   
                                </p>
                            </div>
                        </div>
                        @endif
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" name="facebook" value="{{old('facebook')}}" placeholder="Nhập link facebook" id="input-email" class="form-control">
                            </div>
                        </div>
                        @if($errors->has('phone'))
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">
                                <img width="20px" src="http://www.lycee-marie-de-champagne.fr/wp-content/uploads/2014/06/Warning-128.png" >
                            </label>
                            <div class="col-sm-10">
                                <p class="form-control" style="color:red; margin: 0;background: no-repeat;border: none;"> 
                                    @foreach($errors->get('phone') as $stt => $error)
                                    <span>{{$error}}</span><br>
                                    @endforeach                                   
                                </p>
                            </div>
                        </div>
                        @endif
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-telephone">Điện thoại</label>
                            <div class="col-sm-10">
                                <input type="number" name="phone" value="{{old('phone')}}" placeholder="Nhập số điện thoại" id="input-telephone" class="form-control">
                            </div>
                        </div>
                        @if($errors->has('address'))
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">
                                <img width="20px" src="http://www.lycee-marie-de-champagne.fr/wp-content/uploads/2014/06/Warning-128.png" >
                            </label>
                            <div class="col-sm-10">
                                <p class="form-control" style="color:red; margin: 0;background: no-repeat;border: none;"> 
                                    @foreach($errors->get('address') as $stt => $error)
                                    <span>{{$error}}</span><br>
                                    @endforeach                                   
                                </p>
                            </div>
                        </div>
                        @endif
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-fax">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" value="{{old('address')}}" placeholder="Nhập địa chỉ" id="input-fax" class="form-control">
                            </div>
                        </div>
                        <div class="buttons">
                            <div class="pull-right">
                                <input type="submit" value="Đăng ký" class="btn btn-primary">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
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