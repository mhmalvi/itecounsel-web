<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Eligibility extends FormRequest
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
            'fullname' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'nationality' => 'required',
            'work' => 'required',
            'designation' => 'required',
            'course' => 'required',
            'experience_one' => 'required',
            'live' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'experience_one.required' => 'Please select your relavent work experience',
            'experience_two.required' => 'Please select your work experience',
            'live.required' => 'Please select where do you live in',
            'work.required' => 'Please tell us where do you work?',
            'designation.required' => 'Please let us know your designation'
        ];
    }
}
