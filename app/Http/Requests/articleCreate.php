<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class articleCreate extends FormRequest
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
            'section' => 'required|integer',
            'title'   => 'required|string|max:100',
            'image'   => 'image|mimes:jpeg,png,jpg,gif,svg',
            'details' => 'required|string'
        ];
    }
}
