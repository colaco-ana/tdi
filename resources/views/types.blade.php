@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($types as $type)
                    <div class="card">
                        <div class="card-header">{{$type->name}}</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="/uploads/{{ $type->image }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection