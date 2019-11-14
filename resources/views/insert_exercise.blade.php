@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Adicionar exercício') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('insert_exercise') }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input type="hidden" name="_method" value="post">


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                    <textarea id="description"  class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

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
                                    <input id="duration" type="number" min="0" max="30" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ old('duration') }}" required autocomplete="duration">

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
                                    <select required name="body_part_id">
                                        <option value="">Seleciona uma opção</option>
                                        @foreach($bodies as $body)
                                            <option value="{{ $body->id }}">{{ $body->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exercise_type_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de exercício') }}</label>

                                <div class="col-md-6">
                                    <select required name="exercise_type_id">
                                        <option value="">Seleciona uma opção</option>
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="recipe_id" class="col-md-4 col-form-label text-md-right">{{ __('Receita associada') }}</label>

                                <div class="col-md-6">
                                    <select name="recipe_id">
                                        <option value="">Seleciona uma opção</option>
                                        @foreach($recipes as $recipe)
                                            <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="difficulty_id" class="col-md-4 col-form-label text-md-right">{{ __('Nível de dificuldade') }}</label>

                                <div class="col-md-6">
                                    <select required name="difficulty_id">
                                        <option value="">Seleciona uma opção</option>
                                        @foreach($difficulties as $difficulty)
                                            <option value="{{ $difficulty->id }}">{{ $difficulty->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="generation_id" class="col-md-4 col-form-label text-md-right">{{ __('Geração a que se adequa') }}</label>

                                <div class="col-md-6">
                                    <select required name="generation_id">
                                        <option value="">Seleciona uma opção</option>
                                        @foreach($generations as $generation)
                                            <option value="{{ $generation->id }}">{{ $generation->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="author_id" class="col-md-4 col-form-label text-md-right">{{ __('Autor do exercício') }}</label>

                                <div class="col-md-6">
                                    <select required name="author_id">
                                        <option value="">Seleciona uma opção</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Adicionar exercício') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
