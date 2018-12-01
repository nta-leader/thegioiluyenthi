@extends('templates.admin.master')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 <div class="row">
    <div class="col-md-12">
        <h2>{{ $objItem->name }}</h2>
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
                                <th>ID</th>
                                <th>Tên sự kiện</th>
                                <th>Thời gian bắt đầu</th>
                                <th>Thời gian kết thúc</th>
                                <th>Hình ảnh</th>
                                <th>Trạng Thái</th>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
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
            {"data":"id_slide"},
            {"data":"name"},
            {"data":"start"},
            {"data":"finish"},
            {"data":"picture"},
            {"data":"active"},
            {"data":"code"}
        ]
    });
</script>
<script>
    function active(active,id_slide){
        $.ajax({
            url: '{{route('admin.slide.active')}}',
            type: 'get',
            cache: false,
            data: {
                active:active,
                id_slide:id_slide
            },
            success: function(data){
                $('#'+id_slide).html(data);
            },
            error: function (){
                alert('Có lỗi xảy ra');
            }
        });
    }
    function del(id_slide){
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
                    window.location.href="/admincp/slide/del/"+id_slide;
                }
            }
        );
    }
</script>
@endsection