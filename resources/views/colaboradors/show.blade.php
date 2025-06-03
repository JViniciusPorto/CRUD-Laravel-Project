@extends('layouts.admin')
    
@section('content')

<h1>Vizualizar colaborador</h1>

<div class="card mb-4 border-light shadow" style="width: 50rem;">
   

    <div class="card-header hstack gap-2">
        <span>Colaborador:</span>
        
        <span class="ms-auto">
            <a href="{{ route('colaborador.create') }}" >Voltar à tela de cadastro</a>
        </span>
    </div>

    

    @if (session('success'))
            <p style="color: #086;">
                {{ session('success') }}
            </p>
    @endif

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Setor</th>
                <th scope="col">Cidade</th>
                <th scope="col">Data de Check-in</th>
                <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>

        <tr>
            <th>{{ $colaborador->id }}</th>
            <td>{{ $colaborador->name }}</td>
            <td>{{ $colaborador->setor }}</td>
            <td>{{ $colaborador->city }}</td>
            <td>{{ $colaborador->date }}</td>
            <td class="text-center">
                <a href="{{ route('colaborador.edit', $colaborador) }}" class="btn btn-warning btn-sm">Editar</a>
                <a href="{{ route('colaborador.destroy', $colaborador) }}" class="btn btn-danger btn-sm">Apagar</a>
            </td>
        </tr>

            </tbody>
        </table>
</div>
@endsection