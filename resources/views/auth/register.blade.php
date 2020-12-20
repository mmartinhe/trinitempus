@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>
                <div class="card-body">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--Nombre-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Apellidos-->
                            <div class="form-group row">
                                <label for="apelllidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>
                                <div class="col-md-6">
                                    <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="name" value="{{ old('apellidos') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        <!--Email-->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Fecha nacimiento-->
                        <div class="form-group row">
                            <label for="fNacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha nacimiento') }}</label>
                            <div class="col-md-6">
                                <input id="fNacimiento" type="date" class="form-control @error('fNacimiento') is-invalid @enderror" name="fNacimiento" value="{{ old('Fecha nacimiento') }}">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Ciudad-->
                            <div class="form-group row">
                                <label for="ciudad" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>
                                <div class="col-md-6">
                                    <input id="ciudad" type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" value="{{ old('Ciudad') }}">

                                    @error('ciudad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        <!--Contraseña-->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Botón para registrarse-->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
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
