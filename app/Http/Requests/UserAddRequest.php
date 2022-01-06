<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
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
            'name' => 'bail|max:255|min:1',
            'email' => 'bail|unique:users|required|email',
            'password' =>'required|max:255|min:1',
            'roles_id' =>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'description.required' => 'Nội Dung không được trống',
            'email.unique' => 'Email không được trùng',
            'email.required' => 'Email chưa được nhập',
            'email.email' => 'Email không đúng định dạng',
            'name.min' => 'Tên quá ngắn',
            'name.max' => 'Tên quá dài',
            'roles_id.required' =>'Chưa thêm quyền'
        ];
    }
}
