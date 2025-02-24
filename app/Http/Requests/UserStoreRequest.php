<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return array_merge(parent::rules(), [
            'email'   => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
    }
    public function messages()
    {
        return array_merge(parent::messages(), [
            'email.unique'  => 'Dit e-mailadres is al in gebruik.',
            'password.required' => 'Het wachtwoord is verplicht.',
            'password.min'  => 'Het wachtwoord moet minimaal :min tekens bevatten.',
        ]);
    }
}
