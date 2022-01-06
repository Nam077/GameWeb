<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAddRequest extends FormRequest
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
            'email' => 'bail|unique:users|required|email',
            'password' => 'required|max:255|min:1|confirmed',
            'name' => 'required',
            'password_confirmation' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'password.confirmed' => 'Mật khẩu không trùng nhau',
            'password_confirmation' => 'Chưa nhập lại mật khẩu',
            'name.required' => 'Tên không được để trống',
            'email.unique' => 'Email không được trùng',
            'email.required' => 'Email chưa được nhập',
            'password.required' => 'Mật khẩu chưa được nhập',
            'email.email' => 'Email không đúng định dạng',
        ];
    }
}
