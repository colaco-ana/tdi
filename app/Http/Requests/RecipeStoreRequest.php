<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RecipeStoreRequest extends FormRequest
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
            'preparation_mode' => 'bail|required|string|max:5000',
            'ingredients' => 'bail|required|string|max: 5000',
            'portion' => 'bail|required|integer',
            'duration' => 'bail|required|integer',
            'difficulty_id' => 'bail|required|exists:difficulties,id|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Coloca um nome à receita',
            'name.string' => 'O nome deve ser do tipo texto',
            'name.max' => 'O nome deve ter no máximo 100 caracteres',
            'image.required' => 'Coloca uma imagem',
            'preparation_mode.required' => 'Coloca o modo de preparo da receita',
            'preparation_mode.string' => 'O modo de preparo da receita deve ser tipo texto',
            'ingredients.required' => 'Coloca os ingredientes utilizados',
            'ingredients.string' => 'Os ingredientes utilizados têm de ser tipo texto',
            'portion.required' => 'Coloca as porções da receita',
            'portion.integer' => 'A porção tem de serdo tipo número',
            'duration.required' => 'Coloca uma duração à receita',
            'duration.integer' => 'A duração deve ser do tipo número inteiro',
            'difficulty_id.required' => 'Seleciona um nível de dificuldade da receita',
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
