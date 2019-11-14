@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($recipes as $recipe)
                    <div class="card">
                        <div class="card-header">{{$recipe->name}}</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p> {{ $recipe->image }}</p>
                                    <p><span style="font-weight: bold;">Modo de preparo: </span>{{ $recipe->preparation_mode }}</p>
                                    <p><span style="font-weight: bold;">Ingredientes: </span>{{ $recipe->ingredients }}</p>
                                    <p><span style="font-weight: bold;">Porções: </span>{{ $recipe->portion }}</p>
                                    <p><span style="font-weight: bold;">Duração: </span>{{ $recipe->duration }}</p>
                                    <p> <span style="font-weight: bold;">Nível de dificuldade: </span>{{ $recipe->difficulty->name }}</p>
                                    @if(($recipe->gluten_free)==1)
                                        <p>Esta receita é gluten-free</p>
                                    @endif
                                    @if(($recipe->lactose_free)==1)
                                        <p>Esta receita é lactose-free</p>
                                    @endif
                                    @if(($recipe->vegan)==1)
                                        <p>Esta receita é vegan</p>
                                    @endif
                                    @if(($recipe->vegetariano)==1)
                                        <p>Esta receita é vegetariana</p>
                                    @endif
                                    @if(($recipe->paleo)==1)
                                        <p>Esta receita é paleo</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="/uploads/{{ $recipe->image }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection