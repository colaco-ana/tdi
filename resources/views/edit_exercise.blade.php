@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($exercises as $exercise)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar exercícios') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('update_exercise', $exercise->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input type="hidden" name="_method" value="put">
                            <input type="hidden" name="id" value={{$exercise->id}}>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $exercise -> name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Execução') }}</label>

                                <div class="col-md-6">
                                    <textarea id="description"  class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">
                                        {{ $exercise -> description }}
                                    </textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                            </div>
                    </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Imagem') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" autocomplete="image">

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duração') }}</label>

                                <div class="col-md-6">
                                    <input id="duration" type="number" min="0" max="30" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ $exercise -> duration }}" required autocomplete="duration">

                                    @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="body_part_id" class="col-md-4 col-form-label text-md-right">{{ __('Parte do corpo que trabalha') }}</label>

                                <div class="col-md-6">
                                    <select  class="form-control" name="body_part_id">

                                        @foreach($bodies as $body)
                                            <option @if($body->name == $exercise->body->name) selected @endif value={{ $body->id }}>{{ $body->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exercise_type_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de exercício') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="exercise_type_id">

                                        @foreach($types as $type)
                                            <option @if($type->name == $exercise->type->name) selected @endif value={{ $type->id }}>{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="recipe_id" class="col-md-4 col-form-label text-md-right">{{ __('Receita associada') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="recipe_id">

                                        @foreach($recipes as $recipe)
                                            <option @if($recipe->name == $exercise->recipe->name) selected @endif value={{ $recipe->id }}>{{ $recipe->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="difficulty_id" class="col-md-4 col-form-label text-md-right">{{ __('Nível de dificuldade') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="difficulty_id">

                                        @foreach($difficulties as $difficulty)
                                            <option @if($difficulty->name == $exercise->difficulty->name) selected @endif value={{ $difficulty->id }}>{{ $difficulty->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="generation_id" class="col-md-4 col-form-label text-md-right">{{ __('Geração a que se adequa') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" required name="generation_id">

                                        @foreach($generations as $generation)
                                            <option @if($generation->name == $exercise->generation->name) selected @endif value={{ $generation->id }}>{{ $generation->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="author_id" class="col-md-4 col-form-label text-md-right">{{ __('Autor do exercício') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="author_id">

                                        @foreach($users as $user)
                                            <option @if($user->name == $exercise->user->name)  selected @endif value={{ $user->id }}>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Editar exercício') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
    </div>
@endsection
