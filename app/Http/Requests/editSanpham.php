<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editSanpham extends FormRequest
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
            'name'=>'required',
            'id_cat'=>'required',
            'giamgia'=>'required',
            'gia'=>'required',
            'chiase'=>'required',
            'preview_text'=>'required | max:500',
            'detail_text'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên sản phẩm !',
            'name.unique'=>'Tên sản phẩm bị trùng !',
            'id_cat.required'=>'Vui lòng chọn danh mục !',
            'giamgia.required'=>'Vui lòng chọn một mức giảm giá !',
            'chiase.required'=>'Chọn mức chia sẻ cho sản phẩm !',
            'gia.required'=>'Vui lòng nhập giá bán !',
            'preview_text.required'=>'Vui lòng nhập giới thiệu sản phẩm !',
            'preview_text.max'=>'Giới thiệu tối đa 500 ký tự',
            'detail_text.required'=>'Vui lòng nhập chi tiết sản phẩm !'
        ];
    }
}
