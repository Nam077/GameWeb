<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:games|max:255|min:1',
            'category_id' => 'required',
            'game_tag'=> 'required',
            'path'=> 'required',
            'contents'=> 'required',
            'tutorial'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'path.required' => 'Path không được trống',
            'tutorial.required' => 'Hướng dẫn chơi không được trống không được trống',
            'contents.required' => 'Nội Dung không được trống',
            'name.unique' => 'Tên không được trùng',
            'name.min' => 'Tên quá ngắn',
            'name.max' => 'Tên quá dài',
            'category_id.required' => 'Chưa chọn danh mục',
            'game_tag.required' => 'Tag không được để trống',
        ];
    }
}
