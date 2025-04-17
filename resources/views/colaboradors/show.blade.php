<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('colaborador.create') }}">Voltar à tela de cadastro</a>
    <h1>Vizualizar colaborador</h1>

    @if (session('success'))
            <p style="color: #086;">
                {{ session('success') }}
            </p>
    @endif

            Id: {{ $colaborador->id }}
            Nome: {{ $colaborador->name }}
            Setor: {{ $colaborador->setor }}
            Cidade: {{ $colaborador->city }}
            Data de Check-in: {{ $colaborador->date }}
    <a href="{{ route('colaborador.edit', $colaborador) }}">Editar</a>
    <a href="{{ route('colaborador.destroy', $colaborador) }}">Apagar</a>

</body>
</html>
