<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Dangky extends FormRequest
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
            'username'=>'required|unique:users,username|regex:/^[A-Za-z0-9_\.]{6,32}$/',
            'password'=>'required | min:6',
            'password2'=>'required | same:password',
            'fullname'=>'required',
            'email'=>'required | email | unique:users,email',
            'phone'=>'required | min:10 | max:10 | unique:users,phone',
            'address'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'username.required'=>'Vui lòng nhập tài khoản !',
            'username.unique'=>'Tài khoản đã có người sử dụng !',
            'username.regex'=>'Tài khoản phải viết liền không đấu và không chứa ký tự đặc biệt !',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu tối thiểu 6 ký tự',
            'password2.required'=>'Vui lòng nhập mật khẩu',
            'password2.same'=>'Mật khẩu không khớp !',
            'fullname.required'=>'Vui lòng nhập họ tên',
            'email.required'=>'Vui lòng nhập email !',
            'email.email'=>'Vui lòng nhập đúng định dạng email !',
            'email.unique'=>'Email đã có người sử dụng !',
            'phone.required'=>'Vui lòng nhập số điện thoại !',
            'phone.min'=>'Số điện thoại phải là 10 số !',
            'phone.max'=>'Số điện thoại phải là 10 số !',
            'phone.unique'=>'Số điện thoại đã có người sử dụng !',
            'address.required'=>'Vui lòng nhập địa chỉ !',
        ];
    }
}
