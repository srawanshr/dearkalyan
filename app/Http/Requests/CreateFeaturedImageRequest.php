<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateFeaturedImageRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|alpha_spaces',
            'image' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'title.alpha_spaces' => 'Title can accept only alphabets and spaces'
        ];
    }
}
