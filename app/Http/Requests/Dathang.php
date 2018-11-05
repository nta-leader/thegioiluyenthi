<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Dathang extends FormRequest
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
            'email'=>'required | email',
            'phone'=>'required | min:10 | max:10',
            'address'=>'required',
            'thanhtoan'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên người nhận !',
            'email.required'=>'Vui lòng nhập email !',
            'email.email'=>'Vui lòng nhập đúng định dạng email !',
            'phone.required'=>'Vui lòng nhập số điện thoại !',
            'phone.min'=>'Số điện thoại phải là 10 số !',
            'phone.max'=>'Số điện thoại phải là 10 số !',
            'address.required'=>'Vui lòng nhập địa chỉ nhận hàng !',
            'thanhtoan.required'=>"Vui lòng chọn phương thức thanh toán !",
        ];
    }
}
