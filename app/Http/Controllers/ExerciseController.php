<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExerciseStoreRequest;
use App\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $exercise = Exercise::all();
        $response = [
            'data' => $exercise,
            'message' => 'Lista de exercícios',
            'result' => 'ok'
        ];
        return response($response, 201);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @bodyParam name required string max:100 Nome do exercício.
     * @bodyParam description required string max:5000  Execução do exercício.
     * @bodyParam image required image Imagem do exercício.
     * @bodyParam duration required integer max:30 Duração do exercício.
     * @bodyParam body_part_id required integer Parte do corpo que o exercício trabalha.
     * @bodyParam exercise_type_id required integer Em que tipo de exercício se enquadra.
     * @bodyParam recipe_id Receita associada a um exercício.
     * @bodyParam difficulty_id required integer Dificuldade de execução do exercício.
     * @bodyParam generation_id required integer Geração indicada para o exercício.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExerciseStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        $exercise = Exercise::create($data);

        return $file;



        $response = [
            'data' => $exercise,
            'message' => 'Adicionar exercícios',
            'result' => 'ok'
        ];
        return response($response, 201);
    }

    /**
     * Display the specified resource.
     * @bodyParam name required string max:100 Nome do exercício.
     * @bodyParam description required string max:5000  Execução do exercício.
     * @bodyParam image required image Imagem do exercício.
     * @bodyParam duration required integer max:30 Duração do exercício.
     * @bodyParam body_part_id required integer Parte do corpo que o exercício trabalha.
     * @bodyParam exercise_type_id required integer Em que tipo de exercício se enquadra.
     * @bodyParam recipe_id Receita associada a um exercício.
     * @bodyParam difficulty_id required integer Dificuldade de execução do exercício.
     * @bodyParam generation_id required integer Geração indicada para o exercício.
     * @param  \App\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function show(Exercise $exercise)
    {
        return $exercise;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function edit(Exercise $exercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @bodyParam name required string max:100 Nome do exercício.
     * @bodyParam description required string max:5000  Execução do exercício.
     * @bodyParam image required image Imagem do exercício.
     * @bodyParam duration required integer max:30 Duração do exercício.
     * @bodyParam body_part_id required integer Parte do corpo que o exercício trabalha.
     * @bodyParam exercise_type_id required integer Em que tipo de exercício se enquadra.
     * @bodyParam recipe_id Receita associada a um exercício.
     * @bodyParam difficulty_id required integer Dificuldade de execução do exercício.
     * @bodyParam generation_id required integer Geração indicada para o exercício.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function update(ExerciseStoreRequest $request, Exercise $exercise)
    {
        $data = $request->all();

        $exercise->update($data);

        $response = [
            'data' => $exercise,
            'message' => 'Editar exercícios',
            'result' => 'ok'
        ];
        return response($response, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exercise $exercise)
    {
        $exercise->delete();

        $response = [
            'data' => $exercise,
            'message' => 'Apagar exercícios',
            'result' => 'ok'
        ];
        return response($response, 201);
    }
}
