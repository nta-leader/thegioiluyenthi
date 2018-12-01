@extends('templates.admin.master')
@section('content')
 <div class="row">
    <div class="col-md-12">
        <h2>Quản lý đơn hàng</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-body">
                <div id="_loc" class="table-responsive">
                <h3><span style="color:red;">{{$title}}<span></h3>
                    <div class="row">
                        <div class="col-sm-6" style="text-align: right;">
                            <form method="get" action="javascript:void(0)">
                                <button  class="btn btn-warning btn-sm" onclick="timkiem()" style="float:right">Tìm kiếm</button>
                                <input type="text" id="key" name="key" class="form-control input-sm" placeholder="Nhập từ cần tìm !" style="float:right; width: 300px;" />
                                <div style="clear:both"></div>
                            </form><br />
                        </div>
                    </div>
                    @if(Session::has('msg'))
                        <h2>{{Session::get('msg')}}</h2>
                    @endif
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID_DH</th>
                                <th>Người đặt</th>
                                <th>Người giới thiệu</th>
                                <th>Các sản phẩm</th>
                                <th>Nhân viên xủ lý</th>
                                <th>Hình thức thanh toán</th>
                                <th>Trạng thái</th>
                                <th width="160px">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody id="cart_tk">
                        @foreach($objItems as $objItem)
                        @php
                        	$id_cart=$objItem->id_cart;
                            $username=$objItem->username;
                            $gioithieu=$objItem->gioithieu;
                            $nhanvien=$objItem->nhanvien;
                            $httt=$objItem->httt;
                            $active=$objItem->active;
                            $detail=$objItem->detail;
                            $tong=0;
                            $urlDel=route('admin.donhang.del',['id_cart'=>$id_cart]);
                        @endphp
                            <tr class="gradeX">
                                <td>{{$id_cart}}</td>
                                <td>{{$username}}</td>
                                <td>{{$gioithieu}}</td>
                                <td>
                                    <ul>
                                        @foreach($detail as $item)
                                        @php
                                            $ma_sp=$item->ma_sp;
                                            $namesp=$item->namesp;
                                            $gia=$item->gia;
                                            $giam=$item->giam;
                                            $active_con=$item->active;
                                            $soluong=$item->soluong;
                                            $tongitem=$active_con*$gia*(100-$giam)/100;
                                            $tong+=$tongitem*$soluong;
                                        @endphp
                                        <li>Mã SP: <span style="color:red">{{ $ma_sp }}</span>; Tên: {{$namesp}}( {{number_format($tongitem,0)}}đ ); Số lượng: {{$soluong}};
                                            Tình trạng: 
                                            @if($active_con==1)
                                                <span style="color:blue">còn hàng</span>
                                            @else
                                                <span style="color:red">hết hàng!</span>
                                            @endif
                                        </li>
                                        @endforeach
                                        <li style="color:red">Tổng tiền: {{number_format($tong,0)}}đ</li>                                          
                                    </ul>
                                </td>
                                <td>
                                    @if($nhanvien==null)
                                    <span style="color:red">Chưa có nhân viên xử lý đơn hàng này</span>
                                    @else
                                    <span style="color:blue">{{$nhanvien}}</span>                                       
                                    @endif
                                </td>
                                <td>
                                    
                                    @if($httt==0)
                                    <span style="color:red;">
                                        Thanh toán khi nhận hàng
                                    </span>
                                    @elseif($httt==1)
                                    <span style="color:red;">
                                        Đã thanh toán qua tài khoản web
                                    </span>
                                    @endif
                                    
                                </td>
                                <td id="active{{$id_cart}}">
                                    @if($active==0)
                                    <span style="color:red">
                                        Chờ nhân viên xác nhận
                                    @elseif($active==1)
                                    <span style="color:#28a50c">
                                        Đang đóng gói chuyên đi
                                    @elseif($active==2)
                                    <span style="color:blue">
                                        Đã nhận hàng
                                    @elseif($active==-1)
                                    <span>
                                        Đơn hàng đã hủy
                                    @endif
                                    </span>
	                            </td>
                                <td class="center">
                                    <center>
                                    <a href="javascript:void(0)" onclick="view('{{$id_cart}}')" class="btn btn-primary" data-toggle="modal" data-target="#modal-login">Xem</a>
                                    <a href="{{$urlDel}}" onclick="return confirm('Bạn có muốn xóa không !')" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
                                    </center>
                                    
                                </td>
                            </tr>
                        @endforeach
                            <tr>
                                <td colspan="10">
                                    <div>
                                        <div style="width: 30%;margin: 0 auto;">
                                           {{$objItems->links()}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
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
<div id="ajax_loader" class="ajax-load-qa"> </div>

<div class="modal fade bs-popupcart-modal-lg in" id="modal-login" tabindex="-1" role="dialog" aria-hidden="false" style="display: none;">
    <div class="modal-dialog modal-dialog modal-lg" role="document" style="width: 100%;height: 100%;margin: 0;padding: 101px 262px;">
        <div id="loading" class="loading" style="display: block; position: absolute; z-index: 1000000; width: 96%; height: 100%;">
            <center>
                <img style="margin-top:10%; position: absolute;" width="50px" src="/templates/shop/loader.gif">
            </center>
        </div>
        <div class="modal-content" id="view">
            
        </div>
    </div>
</div>
<div class="modal fade" id="mail" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
            <div class="form-group">
                <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.donhang.email')}}">
                    {{csrf_field()}}
                    <span id="id_dh">
                        <input style="display: none;" type="text"  class="form-control"  name="id_dh">
                    </span>
                    <div class="form-group">
                        <label>Email</label>
                        <span id="email">
                            <input type="text"  class="form-control" value=""  name="email">
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Chủ đề</label>
                        <input id="chude" type="text" required=""  class="form-control"  name="chude">
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="noidung"  required="" class="form-control" rows="3" name="noidung"></textarea>
                    </div>
                   <button id="click"  type="submit" name="submit" class="btn btn-success btn-md">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
    function timkiem(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if($("#key").val()==""){
            return swal("Vui lòng nhập từ khóa !","","error");
        }
        $.ajax({
            url: '',
            type: 'post',
            cache: false,
            data: {
                key:$("#key").val(),
            },
            success: function(data){
                $('#cart_tk').html(data);
            },
            error: function (){
                alert('Có lỗi xảy ra');
            }
        });
    return false;
    }
    function cong(id_cart,id_sp){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{route('admin.donhang.cong')}}',
            type: 'post',
            cache: false,
            data: {
                id_cart:id_cart,
                id_sp:id_sp,
            },
            success: function(data){
                $('#view').html(data);
            },
            error: function (){
                alert('Có lỗi xảy ra');
            }
        });
    return false;
    }
    function tru(id_cart,id_sp){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{route('admin.donhang.tru')}}',
            type: 'post',
            cache: false,
            data: {
                id_cart:id_cart,
                id_sp:id_sp,
            },
            success: function(data){
                $('#view').html(data);
            },
            error: function (){
                alert('Có lỗi xảy ra');
            }
        });
    return false;
    }
    function view(id){
        $('#_noidung').html("");
        $("#loading").css("display","block");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{route('admin.donhang.view')}}',
            type: 'post',
            cache: false,
            data: {
                id_cart:id,
            },
            success: function(data){
                $('#view').html(data);
                $("#loading").css("display","none");
            },
            error: function (){
                alert('Có lỗi xảy ra');
            }
        });
    return false;
    }
    function email(id_dh,email){
        document.getElementById("email").innerHTML = '<input type="text"  class="form-control" value="'+email+'"  name="email">';
        document.getElementById("id_dh").innerHTML = '<input style="display: none;" type="text" value="'+id_dh+'"  name="id_dh">';
    }
</script>
<script type="text/javascript">
function trangthai(noidung,active,id){
    swal({   
        title: noidung,
        text: "",         
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "OK",   
        cancelButtonText: "Hủy",   
        closeOnConfirm: false,   
         }, 
        function(isConfirm){   
            if (isConfirm) {   
                $.ajaxSetup({
		            headers: {
		                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            }
		        });
		        $.ajax({
		            url: '{{route('admin.donhang.trangthai')}}',
		            type: 'post',
		            cache: false,
		            data: {
		                id_cart:id,
		                active:active,
		            },
		            success: function(data){
		            	swal({
						  	position: 'top-end',
						  	type: 'success',
						  	title: 'Thành công !',
						  	showConfirmButton: false,
						  	timer: 500
						});
		                $("#trangthai").html(data);
		            },
		            error: function (){
		                alert('Có lỗi xảy ra');
		            }
		        });   
            }
        }
    );
}
function baohethang(id_cart,id_sp){
    swal({   
        title: "Bạn chắc chắn sản phẩm này đã hết !",
        text: "",         
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "OK",   
        cancelButtonText: "Hủy",   
        closeOnConfirm: false,   
         }, 
        function(isConfirm){   
            if (isConfirm) {   
                $.ajaxSetup({
		            headers: {
		                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            }
		        });
		        $.ajax({
		            url: '{{route('admin.donhang.baohethang')}}',
		            type: 'post',
		            cache: false,
		            data: {
		                id_sp:id_sp,
		                id_cart:id_cart,
		            },
		            success: function(data){
		            	swal({
						  	position: 'top-end',
						  	type: 'success',
						  	title: 'Thành công !',
						  	showConfirmButton: false,
						  	timer: 500
						});
		                $("#trangthai_sp"+id_sp).html(data);
		            },
		            error: function (){
		                alert('Có lỗi xảy ra');
		            }
		        });   
            }
        }
    );
}
</script>
<script type="text/javascript">
    $('#click').click(function(){
        chude=$('#chude').val();
        noidung=$('#noidung').val();
            if(chude!='' && noidung!=''){
            $('#ajax_loader').css( 'display', 'block' );
                setTimeout(function(){
                $('#ajax_loader').css( 'display', 'none' );
            }, 20000);
        }
    });
</script>
@endsection