<?php

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class ExerciseStoreRequest extends FormRequest
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
            'description' => 'bail|required|string|max:5000',
            'image' => 'bail|required|image',
            'duration' => 'bail|required|integer|max:30',
            'body_part_id' => 'bail|required|exists:bodies,id|integer',
            'exercise_type_id' => 'bail|required|exists:types,id|integer',
            'recipe_id' => 'bail',
            'difficulty_id' => 'bail|required|exists:difficulties,id|integer',
            'generation_id' => 'bail|required|exists:generations,id|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Coloca um nome ao exercício',
            'name.string' => 'O nome deve ser do tipo texto',
            'name.max' => 'O nome deve ter no máximo 100 caracteres',
            'description.required' => 'Coloca uma descrição ao exercício',
            'description.string' => 'A descrição deve ser do tipo texto',
            'description.max' => 'A descrição deve ter no máximo 5000 caracteres',
            'image.required' => 'Coloca uma imagem',
            'image.image' => 'A imagem deve ser do tipo imagem',
            'duration.required' => 'Coloca uma duração ao exercício',
            'duration.integer' => 'A duração deve ser do tipo número inteiro',
            'duration.max' => 'A duração deve ter no máximo 30 minutos',
            'body_part_id.required' => 'Seleciona uma parte do corpo',
            'exercise_type_id.required' => 'Seleciona um tipo de exercício',
            'difficulty_id.required' => 'Seleciona um nível de dificuldade',
            'generation_id.required' => 'Seleciona uma geração',
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
