<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
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
            'name' => 'required',
            'mobile' => 'required',
            'mail' => 'required|email',
            'place' => 'required',
            'cours' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'place.required' => 'Please select where do you live in',
            'cours.required' => 'Please select your preferred course',
        ];
    }
}