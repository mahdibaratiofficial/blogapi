<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
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
            // 'title'=>'required|min:5|max:50',
            // 'body'=>'required|min:5|max:1000',
            // // 'slug'=>'required|min:5|max:30',
            // 'user_id'=>'required|min:1|max:3'
        ];
    }
}
