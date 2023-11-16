<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'category' => 'required|array',
            'category.*' => 'numeric',
            'director_id' => 'required|string',
            'duration' => 'required|string',
            'path_trailer' => 'required|string',
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
            'title.required' => 'O título é obrigatório.',
            'title.max' => 'O título deve ter no máximo 255 caracteres.',
            'synopsis.required' => 'A sinopse é obrigatória.',
            'category.required' => 'A categoria é obrigatória.',
            'category.array' => 'A categoria deve ser uma matriz.',
            'category.*.numeric' => 'Cada item na categoria deve ser um número.',
            'director_id.required' => 'O diretor é obrigatório.',
            'duration.required' => 'A duração é obrigatória.',
            'path_poster.image' => 'O arquivo deve ser uma imagem.',
            'path_poster.mimes' => 'O arquivo deve ser do tipo: jpeg, png, jpg, gif, svg.',
            'path_poster.max' => 'O tamanho máximo do arquivo é de 2048 kilobytes.',
            'path_trailer.required' => 'O trailer é obrigatório.',
        ];
    }
}
