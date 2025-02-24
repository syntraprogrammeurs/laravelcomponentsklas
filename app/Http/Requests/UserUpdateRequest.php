<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Verkrijg de gebruiker uit de route; dit kan een model of een string (id) zijn
        $user = $this->route('user') ?? $this->route('id');

        // Als $user een object is (bijv. door implicit route model binding) dan gebruik de id-property
        // Anders, neem je de $user waarde (die dan al een string id is)
        $userId = is_object($user) ? $user->id : $user;

        return array_merge(parent::rules(), [
            'email'   => 'required|email|unique:users,email,' . $userId,
            'password' => 'nullable|min:6',
        ]);
    }
    public function messages()
    {
        return array_merge(parent::messages(), [
            'email.unique' => 'Dit e-mailadres is al in gebruik.',
            'password.min' => 'Het wachtwoord moet minimaal :min tekens bevatten.',
        ]);
    }
}
