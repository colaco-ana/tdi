<?php

namespace App\Http\Controllers;

use App\Body;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $body = Body::all();

        $response = [
            'data' => $body,
            'message' => 'Lista de partes do corpo',
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
        
        $body = Body::create($data);

        return $file;

        $response = [
            'data' => $body,
            'message' => 'Adicionar partes do corpo',
            'result' => 'ok'
        ];
        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Body  $body
     * @return \Illuminate\Http\Response
     */
    public function show(Body $body)
    {
        return $body;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Body  $body
     * @return \Illuminate\Http\Response
     */
    public function edit(Body $body)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Body  $body
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Body $body)
    {

        $data = $request->all();

        $body->update($data);

        $response = [
            'data' => $body,
            'message' => 'Editar partes do corpo',
            'result' => 'ok'
        ];
        return response($response, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Body  $body
     * @return \Illuminate\Http\Response
     */
    public function destroy(Body $body)
    {
        $body->delete();

        $response = [
            'data' => $body,
            'message' => 'Apagar partes do corpo',
            'result' => 'ok'
        ];
        return response($response, 201);

    }
}
