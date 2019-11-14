<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RecipeStoreRequest;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function list()
    {
        return Recipe::all();

    }*/

    public function index()
    {
        $recipe = Recipe::all();
        $response = [
            'data' => $recipe,
            'message' => 'Lista de receitas',
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
     * @bodyParam name required string max:100 Nome da receita.
     * @bodyParam image required image Imagem da receita.
     * @bodyParam preparation_mode required string max:5000 Modo de preparação da receita.
     * @bodyParam ingredients required string max:5000 Ingredientes da receita.
     * @bodyParam portion required integer Número de porções da receita.
     * @bodyParam duration required integer Duração da receita.
     * @bodyParam difficulty_id required integer Nível dedificuldade da receita.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(RecipeStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        $recipe = Recipe::create($data);

        return $file;
        
        $response = [
            'data' => $recipe,
            'message' => 'Adicionar receitas',
            'result' => 'ok'
        ];
        return response($response, 201);
    }

    /**
     * Display the specified resource.
     * @bodyParam name required string max:100 Nome da receita.
     * @bodyParam image required image Imagem da receita.
     * @bodyParam preparation_mode required string max:5000 Modo de preparação da receita.
     * @bodyParam ingredients required string max:5000 Ingredientes da receita.
     * @bodyParam portion required integer Número de porções da receita.
     * @bodyParam duration required integer Duração da receita.
     * @bodyParam difficulty_id required integer Nível dedificuldade da receita.
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return $recipe;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @bodyParam name required string max:100 Nome da receita.
     * @bodyParam image required image Imagem da receita.
     * @bodyParam preparation_mode required string max:5000 Modo de preparação da receita.
     * @bodyParam ingredients required string max:5000 Ingredientes da receita.
     * @bodyParam portion required integer Número de porções da receita.
     * @bodyParam duration required integer Duração da receita.
     * @bodyParam difficulty_id required integer Nível dedificuldade da receita.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(RecipeStoreRequest $request, Recipe $recipe)
    {
        $data = $request->all();

        /*$validator = Validator::make($data, [
            'name' => 'bail|string|max:100',
            'image' => 'bail|image',
            'preparation_mode' => 'bail|string|max:5000',
            'ingredients' => 'bail|string|max: 5000',
            'portion' => 'bail|integer',
            'duration' => 'bail|integer',
            'difficulty_id' => 'bail|exists:difficulties,id|integer',
        ], [
            'name.string' => 'O nome deve ser do tipo texto',
            'name.max' => 'O nome deve ter no máximo 100 caracteres',
            'preparation_mode.string' => 'O modo de preparo da receita deve ser tipo texto',
            'ingredients.string' => 'Os ingredientes utilizados têm de ser tipo texto',
            'portion.integer' => 'A porção tem de serdo tipo número',
            'duration.integer' => 'A duração deve ser do tipo número inteiro',
        ]);

        if ($validator->fails())
            return $validator->errors()->all();
        if($request->hasFile('image'))
        {
            $file = $request->file('image')->store('images');
            $data['image']=$file;
        }*/

        $recipe->update($data);

        $response = [
            'data' => $recipe,
            'message' => 'Editar receitas',
            'result' => 'ok'
        ];
        return response($response, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        $response = [
            'data' => $recipe,
            'message' => 'Apagar receitas',
            'result' => 'ok'
        ];
        return response($response, 201);
    }
}
