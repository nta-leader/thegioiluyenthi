<div class="table-responsive table-cart-content">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td class="text-center"><strong>Ảnh</strong>
                </td>
                <td class="text-center"><strong>Tên sách</strong>
                </td>
                <td class="text-center"><strong>Đơn giá</strong>
                </td>
                <td class="text-center" style="width:10%;"><strong>Số lượng</strong>
                </td>
                <td class="text-center"><strong>Tổng</strong>
                </td>
                <td class="text-center"><strong>Xóa</strong>
                </td>
            </tr>
        </thead>
        <tbody id="checkout_list">
            @php $i=0; @endphp
            @foreach($cart as $item)
            @php
                $i++;
                $id_sp=$item['id_sp'];
                $namesp=$item['namesp'];
                $picture=$item['picture'];
                $gia=$item['gia'];
                $giam=$item['giam'];
                $giaban=$gia*(100-$giam)/100;
                $soluong=$item['soluong'];
                $tongItem=$giaban*$soluong;
                $tong+=$tongItem;
            @endphp
            <tr>
                <td class="text-center">
                    <img src="/storage/app/files/{{$picture}}" alt="{{$namesp}}" title="{{$namesp}}" width="100">
                </td>
                <td class="text-left">
                    <a>{{$namesp}}</a>
                </td>
                <td class="text-right">
                    {{number_format($giaban,0,".",",")}}đ
                </td>
                <td class="text-left">
                    <div class="input-group btn-block">
                        <span class="input-group-btn">
                            <button @if($soluong > 1) onclick="tru('{{$id_sp}}')" @endif class="btn items-count btn-minus minus" type="button">–</button>
                        </span>
                        <input type="text" readonly value="{{$soluong}}" size="4" id="qtyItem680" class="form-control input-text text-center number-sidebar input_pop input_pop" style="padding: 0; min-width: 90px">
                        <span class="input-group-btn">
                            <button onclick="cong('{{$id_sp}}')" class="btn items-count btn-plus plus" type="button">+</button>
                        </span>
                    </div>
                </td>
                <td class="text-right count">
                {{number_format($tongItem,0,".",",")}}đ
                </td>
                <td class="text-center">
                    <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="del('{{$id_sp}}')"><i class="fa fa-times-circle"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="col-sm-4 col-sm-offset-8">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td class="text-right">Tổng tiền:</td>
                <td class="text-right"><strong class="total_money">{{number_format($tong,0,".",",")}}đ</strong></td>
            </tr>
        </tbody>
    </table>
</div>
@php
    Session::put('soluong',$i);
    Session::put('tongtien',$tong);
@endphp
<script>
    document.getElementById("soluong").innerHTML = "{{$i}}";
    document.getElementById("soluong2").innerHTML = "{{$i}}";
    document.getElementById("tongtien").innerHTML = "{{number_format($tong,0,".",",")}}đ";
</script>