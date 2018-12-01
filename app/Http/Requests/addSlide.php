<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addSlide extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>"required|unique:slide,name|max:200",
            "start_day"=>"required",
            "start_time"=>"required",
            "finish_day"=>"required",
            "finish_time"=>"required",
            "picture"=>"required|image",
        ];
    }
    public function messages()
    {
        return [
            "name.required"=>"Vui lòng nhập tên sự kiện !",
            "name.unique"=>"Tên sự kiện bị trùng !",
            "name.max"=>"Tên sự kiện tối đa 200 ký tự !",
            "start_day.required"=>"Vui lòng chọn ngày bắt đầu sự kiên !",
            "start_time.required"=>"Vui lòng chọn giờ bắt đầu sự kiện !",
            "finish_day.required"=>"Vui lòng chọn ngày kết thúc sự kiện !",
            "finish_time.required"=>"Vui lòng chọn giờ kết thúc sự kiện !",
            "picture.required"=>"Vui lòng chọn hình ảnh !",
            "picture.image"=>"Vui lòng chọn đúng định dạng hình ảnh !",
        ];
    }
}
