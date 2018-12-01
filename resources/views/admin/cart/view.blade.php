@php
    $auth=Auth::user();
    $id_cart=$objItem->id_cart;
    $username=$objItem->username;
    $name=$objItem->name;
    $email=$objItem->email;
    $phone=$objItem->phone;
    $address=$objItem->address;
    $comment=$objItem->comment;
    $gioithieu=$objItem->gioithieu;
    $date=$objItem->date;
    $httt=$objItem->httt;
    $nhanvien=$objItem->nhanvien;
    $active=$objItem->active;
    $detail=$objItem->detail;
    $tong=0;
    $hoahong=0;
@endphp
<div id="_noidung">
<div class="modal-header" style="">
    <button style="position: relative;z-index: 9999;" type="button" class="close" data-dismiss="modal">×</button>
    <h4 class="modal-title" id="myModalLabel" style="padding-left: 10px;">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đơn hàng: {{$date}}
        @if($nhanvien!=null && $nhanvien!=$auth->username && $active >= 0 && $active < 2)
            <h3 style="color:red;">Đơn hàng này đã có người xỷ lý</h3>
        @elseif(Session::has('msg_cart'))
            <h3 style="color:red;">{{Session::get('msg_cart')}}</h3>
        @endif
    </h4>
</div>
<div class="modal-body" id="view">
    <table class="table table-bordered" style="margin: 0;">
        <tbody>
            <tr>
                <td style="width:50%;">Họ tên: {{$name}}</td>
                <td style="width:50%;">
                    SDT: {{$phone}}
                </td>
            </tr>
            <tr>
                <td style="width:50%;">Email: {{$email}} 
                    @if($nhanvien==$auth->username)
                    <a href="javascript:void(0)" onclick="email('{{$id_cart}}','{{$email}}')" class="btn btn-primary" data-toggle="modal" data-target="#mail">Liên hệ</a></td>
                    @endif
                <td style="width:50%;">
                    Địa chỉ: {{$address}}
                </td>
                
            </tr>
            <tr>
                <td style="width:50%;">
                    Hình thức: 
                    <span style="color:red">
                    @if($httt==0)
                        Thanh toán khi nhận hàng
                    @elseif($httt==1)
                        Đã thanh toán qua tài khoản web
                    @endif
                    </span>
                </td>
                <td id="trangthai" style="width:50%;">
                    Trạng thái: 
                    <span style="color:red">
                    @if($active==0)
                        Chờ nhân viên xác nhận
                        @php $noidung="Chuyên sang trạng thái Đóng Gói"; @endphp
                    @elseif($active==1)
                        Đang đóng gói chuyên đi
                        @php $noidung="Chuyên sang trạng thái Đã Nhận Hàng"; @endphp
                    @elseif($active==2)
                        Đã nhận hàng
                    @elseif($active==-1)
                        Đơn hàng đã hủy
                    @endif
                    </span>
                    @if($nhanvien==$auth->username && $active >= 0 && $active < 2 )
                    <a onclick="trangthai('{{$noidung}}','{{$active}}','{{$id_cart}}')" class="btn btn-primary" data-toggle="modal" data-target="#modal-login">Chuyển</a>
                        @if($active < 2)
                        <a onclick="trangthai('Bạn muốn hủy đơn hàng này','-1','{{$id_cart}}')" class="btn btn-danger">Hủy</a>
                        @endif
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2">Lời nhắn: "{{$comment}}"</td>
            </tr>

        </tbody>
    </table>
    <div class="table-responsive table-cart-content">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td class="text-center"><strong>Mã SP</strong>
                    </td>
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
                    <td class="text-center" style="width:10%;"><strong>Hoa Hồng(%)</strong>
                    </td>
                    <td class="text-center"><strong>Trạng thái</strong>
                    <td class="text-center"><strong>Tổng</strong>
                    </td>
                </tr>
            </thead>
            <tbody id="checkout_list">
                @foreach($detail as $item)
                @php
                    $id_sp=$item->id_sp;
                    $ma_sp=$item->ma_sp;
                    $namesp=$item->namesp;
                    $gia=$item->gia;
                    $giam=$item->giam;
                    $picture=$item->picture;
                    $active_con=$item->active;
                    $soluong=$item->soluong;
                    $chiase=$item->chiase;
                    $tongitem=$active_con*$gia*(100-$giam)/100;
                    $tong+=$tongitem*$soluong;
                    $hoahong+=ceil($tongitem*$soluong*($chiase/100));
                @endphp
                <tr>
                    <td class="text-left">
                        <a style="color:red;" >{{$ma_sp}}</a>
                    </td>
                    <td class="text-center">
                        <img style="height:100px;" src="/storage/app/files/{{$picture}}" alt="Máy nghe nhạc" title="Máy nghe nhạc" width="100">
                    </td>
                    <td class="text-left">
                        <a>{{$namesp}}</a>
                    </td>
                    <td class="text-left">
                        {{number_format($gia,0)}}đ
                    </td>
                    <td class="text-left" id="congtru{{$id_sp}}">
                        @if($active==0 && $active_con==1 && $nhanvien==$auth->username)
                        <div class="input-group btn-block">
                            <span class="input-group-btn">
                                <button @if($httt==0 && $soluong > 1) onclick="tru('{{$id_cart}}','{{$id_sp}}')" @endif class="btn items-count btn-minus minus" type="button">–</button>
                            </span>
                            <input type="text" readonly="" value="{{$soluong}}" size="4" id="qtyItem680" class="form-control input-text text-center number-sidebar input_pop input_pop" style="padding: 0; min-width: 90px">
                            <span class="input-group-btn">
                                <button @if($httt==0) onclick="cong('{{$id_cart}}','{{$id_sp}}')" @endif class="btn items-count btn-plus plus" type="button">+</button>
                            </span>
                        </div>
                        @else
                            {{$soluong}}
                        @endif
                    </td>
                    <td class="text-left">
                        {{$giam}}%
                    </td>
                    <td class="text-left">
                        {{$chiase}}%
                    </td>
                    <td class="text-left" id="trangthai_sp{{$item->id_sp}}" style="color:red;">                        
                        @if($active_con==0)
                        <span style="color:red">
                            Hết hàng
                        @else
                        <span  style="color:blue">
                            Còn hàng
                            @if($nhanvien==$auth->username && $active==0) <!-- nhân viên xử lý và đơn hàng chưa đóng gói thì có thêm chức năng báo hết hàng ! -->                           
                                <a onclick="baohethang('{{$id_cart}}','{{$item->id_sp}}')" class="btn btn-danger">Báo hết hàng</a>
                            @endif
                        </span>
                        @endif
                    </td>
                    <td class="text-right count">
                    {{number_format($tongitem,0)}}đ
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="8" class="text-right">Tổng tiền:</td>
                    <td class="text-right">
                        <strong class="total_money">{{number_format($tong,0)}}đ</strong>
                    </td>
                </tr>
                @if($gioithieu!=null)
                <tr>
                    <td colspan="8" class="text-right">Hoa hồng( username:"{{$gioithieu}}" )</td>
                    <td class="text-right">
                        <strong class="total_money">{{number_format($hoahong,0)}}đ</strong>
                    </td>
                </tr>
                @else
                <tr>
                    <td colspan="9" class="text-right">Đơn hàng này không có người giới thiệu</td>
                </tr>
                @endif
                <tr>
                    @if($active >= 0)
                    <td colspan="9" class="text-right">
                        <a href="" target="_blank" class="btn btn-primary">In hóa đơn</a>
                    </td>
                    @endif
                <tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@php if($httt==1){ Session::put('tongtien',$tong); } Session::put('hoahong',$hoahong); @endphp