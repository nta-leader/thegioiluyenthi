@extends('templates.admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Sửa sự kiện</h2>
    </div>
</div>
<hr />
<style>
    ._date{
        width:156px;    
        display:inline;
    }
</style>
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
                        <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.slide.postEdit',['id'=>$objItem->id_slide])}}">
                        	{{ csrf_field() }}
                            <input type="text" name="id" value="{{ $objItem->id_slide }}" style="display:none;" />
                            <div class="form-group">
                                <label>Tên sự kiện</label>
                                <input required type="text" name="name" value="{{ $objItem->name }}" class="form-control" />
                            </div>
                            @php
                                $arStart=explode(" ",$objItem->start);
                                $arFinish=explode(" ",$objItem->finish);
                            @endphp
                            <div class="form-group">
                                <label>Thời gian bắt đầu sự kiện</label><br>
                                <input required type="date" name="start_day" value="{{ $arStart[0] }}" class="form-control _date" />
                                <div class="input-group-addon" style="width:0px;display:inline;">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input required type="time" name="start_time" value="{{ $arStart[1] }}" class="form-control _date">
                            </div>
                            <div class="form-group">
                                <label>Thời gian kết thúc sự kiện</label><br>
                                <input required type="date" name="finish_day" value="{{ $arFinish[0] }}" class="form-control _date" />
                                <div class="input-group-addon" style="width:0px;display:inline;">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input required type="time" name="finish_time" value="{{ $arFinish[1] }}" class="form-control _date">
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label><br>
                                <img src="/storage/app/files/{{ $objItem->picture }}" width="300px" >
                                <input type="text" name="picture" value="{{ $objItem->picture }}" style="display:none;" />
                                <input type="file" name="new_picture" />
                            </div>
                            <div class="form-group">
                                <label>Url( Có thể để rỗng )</label>
                                <input type="url" name="url" value="{{ $objItem->url }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea required class="form-control ckeditor" rows="3" name="content">{{ $objItem->content }}</textarea>
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