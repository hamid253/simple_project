<?php

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRule extends FormRequest
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

            'name' => ['required', 'string', 'min:8', 'max:250','unique:users'],
            'email' => ['required', 'email', 'string', 'max:250', 'unique:users'],
            'password' => ['required', 'string', 'max:250', 'confirmed'],
            'mobile' => ['required','min:11','max:11', 'unique:users'],
            'terms' => ['accepted']


        ];
    }

    
}
