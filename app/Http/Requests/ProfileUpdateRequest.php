<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
            ],
            'image' => ['sometimes', 'string', 'max:255'], // Asume que es una URL o un path de archivo como string
            'bio' => ['sometimes', 'string', 'max:255'],
            'role_id' => ['required', 'string', 'max:255'], // Asume que role_id es un identificador como string. Considera validar contra valores existentes si es necesario.
            'song_id' => ['required', 'string', 'max:255'], // Similar a role_id, valida como string. Ajusta según sea necesario.
            'password' => ['required', 'string', 'max:255'],
            // Puedes agregar 'nullable' si algunos campos pueden no ser enviados o pueden estar vacíos
        ];
    }
}
