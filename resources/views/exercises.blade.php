@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($exercises as $exercise)
                    <div class="card">
                        <div class="card-header">{{$exercise->name}}</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><span style="font-weight: bold;">Execução: </span>{{ $exercise->description }}</p>
                                    <p><span style="font-weight: bold;">Duração: </span>{{ $exercise->duration }}</p>
                                    <p><span style="font-weight: bold;">Parte do corpo que trabalha: </span>{{ $exercise->body->name }}</p>
                                    <p>{{ $exercise->body->image }}</p>
                                    <p><span style="font-weight: bold;">Tipo de exercício: </span>{{ $exercise->type->name }}</p>
                                    <p><span style="font-weight: bold;">Nível de dificuldade: </span>{{ $exercise->difficulty->name }}</p>
                                    <p><span style="font-weight: bold;">Geração a que se adequa o exercício: </span>{{ $exercise->generation->name }}</p>
                                    <p><span style="font-weight: bold;">Autor do exercício: </span>{{ $exercise->user->name }}</p>
                                    @if(Auth::user()->role->name=="Admin")
                                        <a href="{{route('edit_exercise',$exercise->id)}}" class="btn btn-primary"> Editar</a>
                                    @endif
                                </div>

                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid float-right" src="/uploads/{{ $exercise->image }}">
                            </div>



                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection