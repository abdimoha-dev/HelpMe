<?php

namespace App\Http\Requests\Student;

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
            'admNo'  => 'required',
            'form'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'county.required' => 'please select a county',
            'school.required' => 'please enter your school name',
            'admNo.required'  => 'please enter your admisition number',
            'form.required'   => 'please enter the form you are in',

        ];
    }
}
