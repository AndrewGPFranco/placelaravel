<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SerieRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:25',
            'descricao' => 'required|min:10|max:1000',
            'link' => 'required|url',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.min' => 'O campo nome deve ter pelo menos :min caracteres.',
            'name.max' => 'O campo nome não pode ter mais de :max caracteres.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'descricao.min' => 'O campo descrição deve ter pelo menos :min caracteres.',
            'descricao.max' => 'O campo descrição não pode ter mais de :max caracteres.',
            'link.required' => 'O campo link é obrigatório.',
            'link.url' => 'O campo link deve ser uma URL válida.',
        ];
    }
}