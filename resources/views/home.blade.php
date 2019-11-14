@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Exercícios</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>

                <div class="row" style="height: 20px;"></div>
                @if(Auth::user()->role->name=='Admin')
                    <div class="card">
                        <div class="card-header">Partes do corpo</div>

                        <div class="card-body">
                            <p>
                                <a href="{{url('/list_body')}}"> Listar partes do corpo </a>
                            </p>
                            <p>
                                <a href="{{url('/insert_body')}}"> Inserir partes do corpo </a>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="height: 20px;"></div>

                    <div class="card">
                        <div class="card-header">Tipo de exercício</div>

                        <div class="card-body">
                            <p>
                                <a href="{{url('/list_type')}}"> Listar tipos de exercícios </a>
                            </p>
                            <p>
                                <a href="{{url('/insert_type')}}"> Inserir tipos de exercícios </a>
                            </p>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>
@endsection
