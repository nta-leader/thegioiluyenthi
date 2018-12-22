@extends('templates.admin.master')
@section('content')
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<div class="row">
    <div class="col-md-12">
        <h2>Thêm sản phẩm</h2>
    </div>
</div>
<script>
$(document).ready(function(){
    $("#danhmuc").change(function(){
        var id=$("#danhmuc").val();
        if(id==""){
            $('#view').html("");
            return swal("Vui lòng chọn danh mục !","","error");
        }
        $.ajax({
            url:'{{route('admin.slidesanpham.listsp')}}',
            type:'get',
            cache: false,
            data:{
                id_cat:id,
            },
            success:function(data){
                $('#view').html(data);
            },
            error:function(){
                alert('Có lỗi xảy ra');
            },
        });
    })
})
$(document).ready(function(){
    $("#hinhthuc").change(function(){
        var id=$("#hinhthuc").val();
        $.ajax({
            url:'{{route('admin.slidesanpham.hinhthuc')}}',
            type:'get',
            cache: false,
            data:{
                id:id,
            },
            success:function(data){
                $('#option').html(data);
            },
            error:function(){
                alert('Có lỗi xảy ra');
            },
        });
    })
})
</script>
<hr />
<div class="row">
    <div class="col-md-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                    @if(Session::has('msg'))
                        <h2>{{Session::get('msg')}}</h2>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.slidesanpham.postadd',['id'=>$id])}}">
                        	{{csrf_field()}}
                            <div class="form-group">
								<label>Hình thức sự kiện</label>
								<select id="hinhthuc" name="hinhthuc" class="form-control">
                                    @foreach($objHinhthuc as $item)
                                    <option value="{{ $item->id_hinhthuc }}" >{{ $item->name }}</option>
                                    @endforeach
								</select>
							</div>
                            <div id="option">

                            </div>
                            <div class="form-group">
								<label>Danh mục</label>
                                <select id="danhmuc" name="id_cat" class="form-control">
                                    <option value="">-Chọn danh mục-</option>
                                    <option value="0">Tất cả sản phẩm-</option>
                                    @php menuMulti_sp($objCats) @endphp
                                </select>
							</div>
                            <style>
                                #example_filter{
                                    float:right;
                                }
                            </style>
                            <div id="view">
                                
                            </div>
                           <button type="submit" name="submit" class="btn btn-success btn-md">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js" ></script>
@endsection