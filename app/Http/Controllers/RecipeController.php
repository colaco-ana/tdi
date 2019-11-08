<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     *
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $data = $request->all();

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
