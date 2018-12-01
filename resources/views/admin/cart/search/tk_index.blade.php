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
                    $namesp=$item->namesp;
                    $gia=$item->gia;
                    $giam=$item->giam;
                    $active_con=$item->active;
                    $soluong=$item->soluong;
                    $tongitem=$active_con*$gia*(100-$giam)/100;
                    $tong+=$tongitem*$soluong;
                @endphp
                <li>Tên: {{$namesp}}( {{number_format($tongitem,0)}}đ ); Số lượng: {{$soluong}};
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