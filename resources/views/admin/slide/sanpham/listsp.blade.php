<table  class="table table-striped table-bordered table-hover" id="example" style="width: 100%;">
    <thead>
        <tr>
            <th>Chọn</th>
            <th>Danh mục</th>
            <th>Mã SP</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Giảm giá(%)</th>
            <th>Chia sẻ(%)</th>                                     
        </tr>
    </thead>
    <tbody>
    @foreach($objItems as $item)
    @php
        $id_sp=$item->id_sp;
        $ma_sp=$item->ma_sp;
        $namecat=$item->namecat;
        $namesp=$item->namesp;
        $picture=$item->picture;
        $gia=$item->gia;
        $giamgia=$item->giamgia;
        $chiase=$item->chiase;
    @endphp
        <tr>
            <td><input type="checkbox" name="chon[]" value="{{ $id_sp }}"></td>
            <td>{{ $namecat }}</td>
            <td>{{ $ma_sp }}</td>
            <td style="width:30%;">{{ $namesp }}</td>
            <td><img width="50px" src="/storage/app/files/{{ $picture }}"</td>
            <td>{{ number_format($gia,0) }}đ</td>
            <td>{{ $giamgia }}%</td>
            <td>{{ $chiase }}%</td>                                     
        </tr>
    @endforeach
    </tbody>
</table>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "language": {
          "lengthMenu": "Hiển thị _MENU_ hàng",
          "zeroRecords": "Không có dữ liệu !",
          "search": 'Tìm kiếm',
          "info": "Trang _PAGE_ / _PAGES_",
          "infoEmpty": "Không có dữ liệu !",
          "infoFiltered": "",
          "processing": "Xin chờ...",
          "paginate": {
              "first":      "Đầu",
              "last":       "Cuối",
              "next":       ">",
              "previous":   "<"
          }
        }
    } );
} );
</script>