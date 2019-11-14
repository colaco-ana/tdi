<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class TypeStoreRequest extends FormRequest
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
            'name' => 'bail|required|string|max:100',
            'image' => 'bail|required|image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Coloca um nome ao tipo de exercício',
            'name.string' => 'O nome deve ser do tipo texto',
            'name.max' => 'O nome deve ter no máximo 100 caracteres',
            'image.required' => 'Coloca uma imagem',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(
                [
                    'data' => $validator->errors(),
                    'msg' => 'Erro de validação.'
                ], 422));
    }
}
