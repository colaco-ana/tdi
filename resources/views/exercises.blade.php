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
                                    <p>{{ $exercise->description }}</p>
                                    <p>{{ $exercise->duration }}</p>
                                    <p>{{ $exercise->body->name }}</p>
                                    <p>{{ $exercise->body->image }}</p>
                                    <p>{{ $exercise->type->name }}</p>
                                    <p>{{ $exercise->difficulty->name }}</p>
                                    <p>{{ $exercise->generation->name }}</p>
                                    <p>{{ $exercise->user->name }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="/uploads/{{ $exercise->image }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection