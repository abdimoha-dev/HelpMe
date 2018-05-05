<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class  RegisterRequest extends FormRequest
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
            'name'     => 'required',
            'email'    => 'required',
            'school'   => 'required',
            'subject'  => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'please enter your name',
            'email.required'   => 'please enter your email',
            'school.required'  => 'please enter your school',
            'subject.required' => 'please enter your subject',
            'password.required'=>'please enter your password'

        ];
    }
}
