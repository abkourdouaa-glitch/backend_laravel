<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ajouterEt extends FormRequest
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
        return [
                'nom' => 'required|string|min:3|max:100',
                'prenom' => 'required|string|min:2|max:100',
                'email' => 'required|min:10',
                'pw' => 'required|min:6|confirmed',
                'bac' => 'required|in:marocain,inter',  
                'filiere' => 'required|'

        ];
    }
    public function messages(){
          return [
            'nom.required' => 'Saisissez votre nom ',
            'prenom.required' => 'Saisissez votre prenom ',
            'email.required' => 'email est obligatoire',
          ];
    }

    
}
