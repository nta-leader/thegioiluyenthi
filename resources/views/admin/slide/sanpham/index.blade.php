@extends('templates.admin.master')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 <div class="row">
    <div class="col-md-12">
        <h2>{{ $objItem->name_sukien }}</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-sm-6">
                            <a href="{{ $objItem->addUrl }}" class="btn btn-success btn-md">Thêm</a>
                        </div>
                    </div>
                    @if(Session::has('msg'))
                        <h2>{{Session::get('msg')}}</h2>
                    @endif
                    <table  class="table table-striped table-bordered table-hover" id="dataTables-example" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Mã SP</th>
                                <th style="width:20%;">Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá</th>
                                <th>Giảm giá(%)</th>
                                <th>Chia sẻ(%)</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>                      
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $('#dataTables-example').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url":"{{ $objItem->url }}",
            "dataType":"json",
            "type":"POST",
            "data":{"_token":"{{ csrf_token() }}"}
        },
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
          },
        },
        "columns":[
            {"data":"ma_sp"},
            {"data":"namesp"},
            {"data":"picture"},
            {"data":"gia"},
            {"data":"giamgia"},
            {"data":"chiase"},
            {"data":"code"}
        ]
    });
</script>
<script>
    function del(url){
        swal({   
            title: "Bạn có muốn xóa slide này không ?",
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
                    window.location.href=url;
                }
            }
        );
    }
</script>
@endsection