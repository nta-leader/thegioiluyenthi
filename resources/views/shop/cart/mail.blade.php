<h3>Đơn hàng: {{$data['date']}}</h3>
<table border="1" id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá gốc</th>
            <th>Số lượng</th>
            <th>Giảm(%)</th>
            <th>Tổng</th>
        </tr>
    </thead>
    <tbody>
    @php $tong=0; @endphp
    @foreach($cart as $item)
    @php
        $tongitem=($item['gia']*(100-$item['giam'])/100)*$item['soluong'];
        $tong+=$tongitem;
    @endphp
        <tr>
            <td data-th="Product">
                <center>{{$item['id_sp']}}</center>
            </td>
            <td data-th="Price"><center>{{$item['namesp']}}</center></td>
            <td data-th="Price">
            <center>{{number_format($item['gia'],0)}}đ</center>
            </td>
            <td data-th="Quantity">
            <center>{{$item['soluong']}}</center>
            </td>
            <td style="color: red;" ><center>{{$item['giam']}}</center></td>
            <td>
            <center>{{number_format($tongitem,0)}}đ</center>
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2" >
                <span class="btn btn-success btn-block">
                <center>
                    @if($data['httt']==0)
                        Thanh toán khi nhận hàng
                    @elseif($data['httt']==1)
                        Đã thanh toán qua paybay
                    @endif
                </center>
                </span>
            </td>
            <td colspan="3" class="hidden-xs">
                <span class="btn btn-success btn-block">
                <center>
                    @if($data['active']==0)
                        Chờ nhân viên xác nhận
                    @elseif($data['active']==1)
                        Đang đóng gói chuyên đi
                    @elseif($data['active']==2)
                        Đã nhận hàng
                    @elseif($data['active']==-1)
                        Đơn hàng đã hủy
                    @endif
                </center>
                </span>
            </td>
            <td class="hidden-xs text-center">
                <span class="btn btn-danger">
                <center><strong>Tổng tiền {{number_format($tong,0)}}đ</strong></center>
                </span>
            </td>
        </tr>
    </tfoot>
</table>
<h3>Thông tin nhận hàng !</h3>
<ul>
    <li>Username: {{$data['username']}}</li>
    <li>Họ tên: {{$data['name']}}</li>
    <li>SDT: {{$data['phone']}}</li>
    <li>Email: {{$data['email']}}</li>
    <li>Địa chỉ: {{$data['address']}}</li>
    <li>Ghi chú: {{$data['comment']}}</li>
</ul>