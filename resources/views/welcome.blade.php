@extends('layouts.app')
@section('content')

<div class="align-items-md-center" id = "logo"; style="width: 350px">
    <img src="{{asset('imagenes/logoTriniTiempo.png')}}">
</div>

<div class="text-left" id = "frase">
    <h1>Tu tiempo es dinero</h1>
    <h3><a href="{{route('register')}}">¡Regístrate gratis!</a></h3>
</div>
<div class="container-fluid">
    @include('auth.login2')
</div>

@endsection


