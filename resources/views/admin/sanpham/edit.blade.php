@extends('templates.admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Sửa sản phẩm</h2>
    </div>
</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
function number_format( number, decimals, dec_point, thousands_sep ) {
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "," : dec_point;
    var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
                              
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
$(function(){
    $("#gia").keyup(function () {
        var gia =$(this).val();
		var value='Giá gốc: '+number_format(gia,0,'.',',')+'đ';
        $("#view_gia").text(value);

        var giamgia =$("#giamgia").val();
        var value=gia*(100-giamgia)/100;
        var value='Giá hiện tại: '+number_format(value,0,'.',',')+'đ';
        $("#view_giamgia").text(value);

        var chiase =$("#chiase").val();
        var value=gia*chiase/100;
        var value='Hoa hồng: '+number_format(value,0,'.',',')+'đ';
        $("#view_chiase").text(value);
    }).keyup();
});
$(document).ready(function(){
    $("#giamgia").change(function(){
        var gia =$("#gia").val();
        var giamgia =$("#giamgia").val();
            gia=gia*(100-giamgia)/100;
        var value='Giá hiện tại: '+number_format(gia,0,'.',',')+'đ';
        $("#view_giamgia").text(value);

        var chiase =$("#chiase").val();
            chiase=gia*chiase/100;
        var value='Hoa hồng: '+number_format(chiase,0,'.',',')+'đ';
        $("#view_chiase").text(value);
    })
})
$(document).ready(function(){
    $("#chiase").change(function(){
        var gia =$("#gia").val();
        var giamgia =$("#giamgia").val();
            gia=gia*(100-giamgia)/100;
        var chiase =$("#chiase").val();
        var value=gia*chiase/100;
        value='Hoa hồng: '+number_format(value,0,'.',',')+'đ';
        $("#view_chiase").text(value);
    })
})
$(document).ready(function(){
    $("#_check").change(function(){
        var check =$("#_check").val();
        if(check==1){
            $("#doihinh").css("display","block");
        }else{
            $("#doihinh").css("display","none");
        }
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
                    @php
                        $id=$objItem->id_sp;
                        $namesp=$objItem->namesp;
                        $detail_text=$objItem->detail_text;
                        $preview_text=$objItem->preview_text;
                        $picture=$objItem->picture;
                        $giamgia=$objItem->giamgia;
                        $gia=$objItem->gia;
                        $chiase=$objItem->chiase;
                        $ma_sp=$objItem->ma_sp;
                        $old_name=old('name');
                        $old_detail=old('detail_text');
                        $old_preview=old('preview_text');
                        $old_ma_sp=old('ma_sp');
                    @endphp
                        <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.sanpham.edit',['id'=>$id])}}">
                        	{{csrf_field()}}
                            <div class="form-group">
                                <label>Mã sản phẩm</label>
                                <input type="text" name="ma_sp" value="{{ old('ma_sp') !='' ? $old_ma_sp : $ma_sp }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" name="name" value="{{ old('name') !='' ? $old_name : $namesp }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input id="gia" type="text" name="gia" value="{{ old('gia') !='' ? old('gia') : $gia }}" class="form-control" />
                                <p id="view_gia" style="padding: 1px 12px;color:red;"></p>
                            </div>
                            <div class="form-group">
								<label>Giảm giá(%)</label>
								<select id="giamgia" name="giamgia" class="form-control">
									<option value="0" >Không giảm giá</option>
									@for($i=1;$i<=99;$i++)
									<option  value="{{$i}}"  @if(old('giamgia') == $i) selected @elseif($giamgia==$i && old('giamgia')=="") selected @endif >{{$i}}</option>
									@endfor
								</select>
                                <p id="view_giamgia" style="padding: 1px 12px; color:red;"></p>
							</div>
                            <div class="form-group">
								<label>Chia sẻ(%)</label>
								<select id="chiase" name="chiase" class="form-control">
									<option value="0" >Không hưởng hoa hồng</option>
									@for($i=1;$i<=99;$i++)
									<option value="{{$i}}" @if(old('chiase') == $i) selected @elseif($chiase==$i && old('chiase')=="") selected @endif>{{$i}}</option>
									@endfor
								</select>
                                <p id="view_chiase" style="padding: 1px 12px;color:red;"></p>
							</div>
                            <div class="form-group">
								<label>Chọn danh mục</label>
								<select name="id_cat" class="form-control">
									@php menuMulti($objCats) @endphp
								</select>
							</div>
							
							<div class="form-group">
                                <label>hình ảnh</label>
                                <p>
								    <input style="display: none;" type="text" value="{{$picture}}" name="picture_c" />
                                    <img src="/storage/app/files/{{$picture}}" width="200px" />
                                </p>
                            </div>
							<div class="form-group">
                                <select id="_check" name="check" class="form-control">
                                    <option value="0">Giữ lại hình này</option>
                                    <option value="1">Xóa hình này, upload hình mới</option>
                                </select>
                            </div>
                            <div id="doihinh" class="form-group" style="display:none">
                                <label>Chọn hình ảnh mới</label>
                                <input type="file" name="picture" />
                            </div>
                            <div class="form-group">
                                <label>Giới thiệu</label>
                                <textarea class="form-control" rows="3" name="preview_text">{{ old('preview_text') !='' ? $old_preview : $preview_text }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Chi tiết</label>
                                <textarea class="form-control ckeditor" rows="3" name="detail_text">{{ old('detail_text') !='' ? $old_detail : $detail_text }}</textarea>
                            </div>
                           <button type="submit" name="submit" class="btn btn-success btn-md">Sửa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
@endsection