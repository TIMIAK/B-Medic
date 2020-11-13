<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordResetRequest extends FormRequest
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
            //
            'old_password' => 'required',
            'new_password' =>'required',
            'c_new_password'  => 'required|same:new_password',
        ];
    }
    public function messages()
    {
        return [
            'old_password.required' => 'Old password Field is required',
            'new_password.required' => 'New password Field is required',
            'c_new_password.required' => 'Confirm new password Field is required',
            'c_new_password.same' => 'New and Confirm password do  not Match',
        ];
    }
}
