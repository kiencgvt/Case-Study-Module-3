<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormFoodRequest extends FormRequest
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
            'image'=>'required',
            'name'=>'required',
            'price'=>'required',
            'service_charge'=>'required',
            'shop_id'=>'required',
            'category_id'=>'required',
            'preparation_time'=>'required',
            'tag'=>'required',
        ];
    }

    public function messages()
    {
        $messages = [
            'image.required'=>'Trường ảnh không được để trống',
            'name.required'=>'Trường tên không được để trống',
            'price.required'=>'Trường giá không được để trống',
            'service_charge.required'=>'Trường phí dịch vụ không được để trống',
            'shop_id.required'=>'Trường cửa hàng không được để trống',
            'category_id.required'=>'Trường thể loại không được để trống',
            'preparation_time.required'=>'Trường thời gian chuẩn bị không được để trống',
            'tag.required'=>'Trường thẻ không được để trống',

        ];
        return $messages;
    }
}
