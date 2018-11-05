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
					<h1 style="color:red;margin-top: 0;font-size: 30px;">{{$title}}</h1>
						@foreach($objItems as $item)
						@php
							$name=$item->name;
							$email=$item->email;
							$phone=$item->phone;
							$address=$item->address;
							$comment=$item->comment;
							$httt=$item->httt;
							$date=$item->date;
							$active=$item->active;
							$sanpham=$item->sanpham;
							$tong=0;
							$tonghoahong=0;
						@endphp
                        <div class="modal-content">
                            <div class="modal-header" style="padding: 0;border-radius: 5px;">
								<h4 class="modal-title" id="myModalLabel" style="padding-left: 10px;">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i> Đơn hàng: {{$date}}            
								</h4>
							</div>
							@if(Request::is('user/don-hang'))
							<table class="table table-bordered" >
								<tbody>
									<tr>
										<td style="width:50%;">Họ tên: {{$name}}</td>
										<td style="width:50%;">
											SDT: {{$phone}}
										</td>
									</tr>
									<tr>
										<td style="width:50%;">Email: {{$email}}</td>
										<td style="width:50%;">
											Địa chỉ: {{$address}}
										</td>
									</tr>
									<tr>
										<td style="width:50%;">
											Hình thức: <span style="color:red">
											@if($httt==0)
												Thanh toán khi nhận hàng
											@elseif($httt==1)
												Đã thanh toán qua tài khoản web
											@endif
											</span>
										</td>
										<td style="width:50%;">
											Trạng thái: <span style="color:red">
											@if($active==0)
												Chờ nhân viên xác nhận
											@elseif($active==1)
												Đang đóng gói chuyên đi
											@elseif($active==2)
												Đã nhận hàng
											@elseif($active==-1)
												Đơn hàng đã hủy
											@endif
											</span>
										</td>
										<tr>
											<td colspan="2">Lời nhắn: "{{$comment}}"</td>
										</tr>
									</tr>
								</tbody>
							</table>
							@endif
                            <div class="modal-body" style="position: relative;padding: 0;">
                                <div class="table-responsive table-cart-content">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-center"><strong>Ảnh</strong>
                                                </td>
                                                <td class="text-center"><strong>Tên sách</strong>
                                                </td>
                                                <td class="text-center"><strong>Giá</strong>
                                                </td>
                                                <td class="text-center" style="width:10%;"><strong>Số lượng</strong>
                                                </td>
                                                <td class="text-center" style="width:10%;"><strong>Giảm(%)</strong>
                                                </td>
												<td>Trạng thái</td>
                                                <td class="text-center"><strong>Tổng</strong>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody id="checkout_list">
											@foreach($sanpham as $sp)
											@php
												$picture=$sp->picture;
												$namesp=$sp->namesp;
												$gia=$sp->gia;
												$soluong=$sp->soluong;
												$giam=$sp->giam;
												$chiase=$sp->chiase;
												$active_con=$sp->active;
												$tongsp=$active_con*($gia*(100-$giam)/100)*$soluong;
												$tonghoahong+=$tongsp*($chiase/100);
												$tong+=$tongsp;
											@endphp
											<tr>
												<td class="text-center">
													<img style="height:100px;" src="/storage/app/files/{{$picture}}" alt="{{$namesp}}" title="{{$namesp}}" width="100">
												</td>
												<td class="text-left">
													<a>{{$namesp}}</a>
												</td>
												<td class="text-right">
													{{number_format($gia,0)}}đ
												</td>
												<td class="text-left">
													{{$soluong}}
												</td>
												<td class="text-left">
													{{$giam}}
												</td>
												<td class="text-left">                        
													@if($active_con==0)
													<span style="color:red">
														Hết hàng
													@else
													<span style="color:blue">
														Còn hàng
													</span>
													@endif
												</td>
												<td class="text-right count">
													{{number_format($tongsp,0)}}đ
												</td>
											</tr>
											@endforeach
											<tr>
												<td colspan="6" class="text-right">Tổng tiền:</td>
												<td class="text-right">
													<strong class="total_money">{{number_format($tong,0)}}đ</strong>
												</td>
											</tr>
											@if(Request::is('user/don-hang-gioi-thieu'))
											<tr>
												<td>
													Trạng thái: <span style="color:red">
													@if($active==0)
														Chờ nhân viên xác nhận
													@elseif($active==1)
														Đang đóng gói chuyên đi
													@elseif($active==2)
														Đã nhận hàng
													@elseif($active==-1)
														Đơn hàng đã hủy
													@endif
													</span>
												</td>
												@if($active==2)
												<td colspan="5" class="text-right">Bạn đã nhận được:</td>
												@else
												<td colspan="5" class="text-right">Nếu thành công bạn sẽ nhận được:</td>
												@endif
												<td class="text-right">
													<strong class="total_money">{{number_format($tonghoahong,0)}}đ</strong>
												</td>
											</tr>
											@endif
										</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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