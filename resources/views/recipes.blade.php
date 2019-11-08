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
                                    <p>{{ $recipe->image }}</p>
                                    <p>{{ $recipe->preparation_mode }}</p>
                                    <p>{{ $recipe->ingredients }}</p>
                                    <p>{{ $recipe->portion }}</p>
                                    <p>{{ $recipe->duration }}</p>
                                    <p>{{ $recipe->difficulty->name }}</p>
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