<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormStoreShopController extends FormRequest
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
            'image' => 'required',
            'address' => 'required|min:2|max:255',
            'name' => 'required|min:2|max:255'
        ];
    }

    public function messages()
    {
        return [
            'image.required'=> 'Không được bỏ trống ảnh',
            'address.required'=>'Địa chỉ không được bỏ trống',
            'address.min'=>'Độ dài ít nhất:2 ký tự ',
            'address.max'=>'Không nhập quá 255 ký tự',
            'name.reqired'=> 'Tên cửa hàng không được bỏ trống',
            'name.min'=>'Tên cửa hàng chứa ít nhất 2 ký tự',
            'name.max'=> 'Tên cửa hàng không được vượt quá 255 ký tự'
        ];
    }
}
