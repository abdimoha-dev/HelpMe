<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class CompleteRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'county' => 'required',
            'school' => 'required',
            'tscNo'  => 'required',

        ];
    }

    public function messages()
    {
        return [

            'county.required' => 'please select your county',
            'school.required' => 'please enter your school',
            'tscNo.required'=>'please enter your tsc number',
        ];
    }
}
