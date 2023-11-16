<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDirectorRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'email' => 'required|email|unique:directors,email,'.$this->route('director')->id,
            'phone' => 'required|string|max:20',
            'cpf' => 'required|string|unique:directors,cpf,'.$this->route('director')->id,
            'gender' => 'required|in:M,F,X',
            'zipcode' => 'required|string|max:10',
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'neighbourhood' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'complement' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser uma string.',
            'name.max' => 'O campo nome deve ter no máximo :max caracteres.',
            'birth_date.required' => 'O campo data de nascimento é obrigatório.',
            'birth_date.date' => 'O campo data de nascimento deve ser uma data válida.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'Já existe um diretor cadastrado com este e-mail.',
            'phone.required' => 'O campo telefone é obrigatório.',
            'phone.string' => 'O campo telefone deve ser uma string.',
            'phone.max' => 'O campo telefone deve ter no máximo :max caracteres.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.string' => 'O campo CPF deve ser uma string.',
            'cpf.unique' => 'Já existe um diretor cadastrado com este CPF.',
            'gender.required' => 'O campo gênero é obrigatório.',
            'gender.in' => 'O campo gênero deve ser masculino, feminino ou outro.',
            'zipcode.required' => 'O campo CEP é obrigatório.',
            'zipcode.string' => 'O campo CEP deve ser uma string.',
            'zipcode.max' => 'O campo CEP deve ter no máximo :max caracteres.',
            'address.required' => 'O campo endereço é obrigatório.',
            'address.string' => 'O campo endereço deve ser uma string.',
            'address.max' => 'O campo endereço deve ter no máximo :max caracteres.',
            'number.required' => 'O campo número é obrigatório.',
            'number.string' => 'O campo número deve ser uma string.',
            'number.max' => 'O campo número deve ter no máximo :max caracteres.',
            'neighbourhood.required' => 'O campo bairro é obrigatório.',
            'neighbourhood.string' => 'O campo bairro deve ser uma string.',
            'neighbourhood.max' => 'O campo bairro deve ter no máximo :max caracteres.',
            'state.required' => 'O campo estado é obrigatório.',
            'state.string' => 'O campo estado deve ser uma string.',
            'state.max' => 'O campo estado deve ter no máximo :max caracteres.',
            'city.required' => 'O campo cidade é obrigatório.',
            'city.string' => 'O campo cidade deve ser uma string.',
            'city.max' => 'O campo cidade deve ter no máximo :max caracteres.',
            'complement.string' => 'O campo complemento deve ser uma string.',
            'complement.max' => 'O campo complemento deve ter no máximo :max caracteres.',
        ];
    }
}
