<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseRequest extends FormRequest
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
            'speaker' => 'required|numeric|not_in:0',
            'details' => 'required',
            'name'    => 'required',
            'sex'     => 'required|integer|between:1,3',
            'levels'  => 'required|integer|between:1,3',
            'date'    => 'required|date',
            #'start_time' => 'required|date',
            #'end_time'   => 'required|date|after_or_equal:start_date',
            'type'       => 'required|integer|between:0,1',
            'type_courses' => 'required|integer',
            'collage'      => 'required|integer',
            'published'    => 'integer|between:0,1',
            'certificate'  => 'integer|between:0,1',
            'attend'       => 'required|integer',
            'live'         => 'url'
        ];
    }
}
