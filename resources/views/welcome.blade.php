@extends('layouts.admin')
    
@section('content')

    <div class="card mb-4 border-light shadow" style="width: 20rem; //height: 22rem; ">
        <div class="card-body">

        <form class="row g-3" action="{{ route('login.auth') }}" method="POST" style="justify-content: center;">
        @csrf
        <h1 style="text-align: center">Login</h1>

        <div class="col-md-12">
            <label for="email" class="form-label">Digite seu email:</label>
            <input type="text" name ="email" id="email" class="form-control" placeholder="Digite seu email aqui" value="{{ old('email') }}" required>
        </div>

        <div class="col-md-12">
            <label for="password" class="form-label">Digite sua senha:</label>
            <input type="password" name ="password" id="password" class="form-control" placeholder="Digite sua senha aqui" value="{{ old('password') }}" required>
        </div>
    
        <button type="submit" class="btn btn-primary btn-sm mb-2">Enviar</button>

        </form>
    
    @if(session('erro'))
        <p style="color:red">{{ session('erro') }}</p>
    @endif
        </div>
    </div>

@endsection