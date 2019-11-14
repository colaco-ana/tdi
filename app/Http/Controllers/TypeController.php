<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\TypeStoreRequest;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Type::all();
        $response = [
            'data' => $type,
            'message' => 'Lista de tipos de exercícios',
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
     * @bodyParam name required string max:100 Nome da secção do tipo de exercício.
     * @bodyParam image required image Imagem ou icone do tipo de exercício.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(TypeStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        $type = Type::create($data);

        return $file;

        $type = Type::all();
        $response = [
            'data' => $type,
            'message' => 'Adicionar tipos de exercícios',
            'result' => 'ok'
        ];
        return response($response, 201);
    }

    /**
     * Display the specified resource.
     * @bodyParam name required string max:100 Nome da secção do tipo de exercício.
     * @bodyParam image required image Imagem ou icone do tipo de exercício.
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        return $type;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @bodyParam name required string max:100 Nome da secção do tipo de exercício.
     * @bodyParam image required image Imagem ou icone do tipo de exercício.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(TypeStoreRequest $request, Type $type)
    {
        $data = $request->all();

        $type->update($data);

        $type = Type::all();
        $response = [
            'data' => $type,
            'message' => 'Editar tipos de exercícios',
            'result' => 'ok'
        ];
        return response($response, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();

        $type = Type::all();
        $response = [
            'data' => $type,
            'message' => 'Apagar tipos de exercícios',
            'result' => 'ok'
        ];
        return response($response, 201);
    }
}
