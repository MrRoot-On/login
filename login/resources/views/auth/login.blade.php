@extends('layouts.app')

@section('content')

<br><br><br>
    
<center>
    <div class="card align-" style="width: 20rem;">
    <h1><br><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login</h1>

    <form action="{{ route('login')}}" method="POST" class="container">
        {{ csrf_field() }}

<br><br>
    <div class="form-group">
        @if($errors->first('email')) <div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</div>@endif
        <p align="left">Correo.</p>
            <input 
            class="form-control" 
            type="email" 
            name="email" 
            value="{{ old('email') }}"
            placeholder="Correo Electrónico" />
    </div>  


        <div class="form-group">
            @if($errors->first('password')) <div class="alert alert-danger" role="alert">{{ $errors->first('password') }}</div>@endif
            <p align="left">Password. </p>
            <input 
            class="form-control" 
            type="password" 
            name="password" 
            value=""
            placeholder="Ingresa tu password"/>
        </div>
        
            <input class="btn btn-primary" type='submit' value='Ingresar'>      
        <br><br>
    </form>
<div class="dropdown-divider"></div>
    <a href="#">Recuperar password <br><br></a>

</div></center>

@endsection
