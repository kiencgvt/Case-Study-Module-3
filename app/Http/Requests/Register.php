<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
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
            'name' => 'required',
            'image' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'role' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống tên',
            'image.required' => 'Không được để trống ảnh',
            'email.required' => 'Không được để trống email',
            'email.email' => 'Chưa đúng định dạng email',
            'password.required' => 'Không được để trống mật khẩu',
            'address.required' => 'Không được để trống địa chỉ',
            'phone.required' => 'Không được để trống số điện thoại',
            'role.required' => 'Không được để trống vị trí',
        ];
    }
}
