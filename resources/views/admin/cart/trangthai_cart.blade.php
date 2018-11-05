Trạng thái: 
<span style="color:red">
@if($active==1)
    Đang đóng gói chuyên đi
    @php $noidung="Chuyên sang trạng thái Đã Nhận Hàng"; @endphp
@elseif($active==2)
    Đã nhận hàng
@elseif($active==-1)
    Đơn hàng đã hủy
@endif
</span>
@if($active >= 0 && $active < 2 )
<a onclick="trangthai('{{$noidung}}','{{$active}}','{{$id_cart}}')" class="btn btn-primary" data-toggle="modal" data-target="#modal-login">Chuyển</a>
    @if($active < 2)
    <a onclick="trangthai('Bạn muốn hủy đơn hàng này','-1','{{$id_cart}}')" class="btn btn-danger">Hủy</a>
    @endif
@endif