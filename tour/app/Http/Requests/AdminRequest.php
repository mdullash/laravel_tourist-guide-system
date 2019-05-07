<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
    }
    public function messages(){
        return [
            'fname.required' => 'First Name is empty',
            'lname.unique' => 'Last name is empty',
            'email.required' => 'Email field is empty',
            'password.required' => 'Password field is empty'
        ];
    }
}
