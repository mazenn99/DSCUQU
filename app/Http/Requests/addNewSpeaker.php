<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addNewSpeaker extends FormRequest
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
            'name' => 'required|string',
            'overview' => 'required|max:1000',
            'twitter'  => 'nullable|url',
            'snap'     => 'nullable|url',
            'instagram'=> 'nullable|url',
            'facebook' => 'nullable|url',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
