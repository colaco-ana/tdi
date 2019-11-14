@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Adicionar receita') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('insert_recipe') }}" enctype="multipart/form-data">
                            @csrf
                            @method('put');
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
                                <label for="preparation_mode" class="col-md-4 col-form-label text-md-right">{{ __('Modo de preparo') }}</label>

                                <div class="col-md-6">
                                    <textarea id="preparation_mode"  class="form-control @error('preparation_mode') is-invalid @enderror" name="preparation_mode" value="{{ old('preparation_mode') }}" required autocomplete="preparation_mode">

                                    </textarea>

                                    @error('preparation_mode')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                            </div>
                    </div>


                            <div class="form-group row">
                                <label for="ingredients" class="col-md-4 col-form-label text-md-right">{{ __('Ingredientes') }}</label>

                                <div class="col-md-6">
                                    <input id="ingredients" type="text" class="form-control @error('ingredients') is-invalid @enderror" name="ingredients" value="{{ old('ingredients') }}" required autocomplete="ingredients">

                                    @error('ingredients')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="portion" class="col-md-4 col-form-label text-md-right">{{ __('Porção') }}</label>

                                <div class="col-md-6">
                                    <input id="portion" type="number" class="form-control @error('portion') is-invalid @enderror" name="portion" value="{{ old('portion') }}" required autocomplete="portion">

                                    @error('portion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duração') }}</label>

                                <div class="col-md-6">
                                    <input id="duration" type="number" min="0" max="120" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ old('duration') }}" required autocomplete="duration">

                                    @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <input type="checkbox" name="gluten_free" value="1"> Gluten Free<br>
                                <input type="checkbox" name="lactose_free" value="1" > Lactose Free<br>
                                <input type="checkbox" name="vegan" value="1" > Vegan<br>
                                <input type="checkbox" name="vegetariano" value="1" > Vegetariano<br>
                                <input type="checkbox" name="paleo" value="1" > Paleo<br>
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
