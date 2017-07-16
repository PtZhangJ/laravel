<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Http\Request;
class CreateArticlesRequest extends FormRequest
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
            'title'=>'required|min:3',
            'author'=>'required',
            'content'=>'required',
        ];
    }
    public function messages()
    {
        # code...
            return [
                'title.required'=>'请输入标题',
                'author.required'=>'请输入作者',
                'content.required'=>'请输入内容',
                'title.min'=>'标题至少三个字符',
            ];
    }

}
