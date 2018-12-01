@foreach($objItems as $objItem)
@php
    $id=$objItem->id_sp;
    $namesp=$objItem->namesp;
    $namecat=$objItem->namecat;
    $gioithieu=$objItem->preview_text;
    $picture=$objItem->picture;
    $giamgia=$objItem->giamgia;
    $gia=$objItem->gia;
    $chiase=$objItem->chiase;
    $daban=$objItem->daban;
    $trangthai=$objItem->active;
    $urlEdit=route('admin.sanpham.edit',['id'=>$id]);
    $urlDel=route('admin.sanpham.del',['id'=>$id]);
    $urlAnh=route('admin.sanpham.anh',['id'=>$id]);
@endphp
    <tr class="gradeX">
        <td>{{$id}}</td>
        <td style="width:15%;">{{$namesp}}</td>
        <td>{{number_format($gia,0)}}đ</td>
        <td>
            <span style="color:red">{{$giamgia}}%</span>
            <p>Giá hiện tại: <span style="color:red">{{number_format($gia*(100-$giamgia)/100,0)}}đ</span></p>
        </td>
        <td>
            <span style="color:red">{{$chiase}}%</span>
            <p>Hoa hồng: <span style="color:red">{{number_format(($gia*(100-$giamgia)/100)*$chiase/100,0)}}đ</span></p>
        </td>
        <td>{{$daban}}</td>
        <td style="width:15%;">{{$namecat}}</td>
        <td class="center">
            <img src="/storage/app/files/{{$picture}}" alt="" height="80px" width="100px" />
            <br>
            <center><a href="{{$urlAnh}}">Xem các ảnh</a></center>
        </td>
        
        <td id="active{{$id}}">
            <center>
            @if($trangthai==1)
                <a href="javascript:void(0)" onclick="active('1','#active{{$id}}','{{$id}}')" class="btn btn-primary">Hiển Thị</a>
            @elseif($trangthai==0)
                <a href="javascript:void(0)" onclick="active('0','#active{{$id}}','{{$id}}')" class="btn btn-danger">Đã ẩn</a>
            @endif
            </center>
        </td>
        <td class="center">
            <a href="{{$urlEdit}}" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
            <a href="{{$urlDel}}" onclick="return confirm('Bạn có muốn xóa không !')" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
        </td>
    </tr>
@endforeach
    <tr>
        <td colspan="11">
            <div>
                <div style="width: 30%;margin: 0 auto;">
                    {{$objItems->links()}}
                </div>
            </div>
        </td>
    </tr>