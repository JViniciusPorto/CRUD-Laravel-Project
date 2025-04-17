<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
</head>
<body>
    <h1>Cadastrar Colaborador</h1>
    <form action="{{ route('colaborador.store')}}" method="POST">
        @csrf
        @method('POST')
        <label for="name">Digite seu nome completo:</label>
        <input type="text" name="name" id="name" placeholder="Nome completo" value="{{ old('name') }}" required><br>

        <label for="setor">Selecione o setor em que trabalha:</label>
        <select name="setor" id="setor" value="{{ old('setor') }}" required> 
            <option value="tec">Tecnologia</option>
            <option value="adm">Administração</option>
            <option value="proj">Projeto</option>
        </select><br>

        <label for="city">Selecione a cidade em que mora:</label>
        <select name="city" id="city" value="{{ old('city') }}" required>
            <option value="Aracaju">Aracaju</option>
            <option value="Belém">Belém</option>
            <option value="Belo Horizonte">Belo Horizonte</option>
            <option value="Boa Vista">Boa Vista</option>
            <option value="Brasília">Brasília</option>
            <option value="Campo Grande">Campo Grande</option>
            <option value="Cuiabá">Cuiabá</option>
            <option value="Curitiba">Curitiba</option>
            <option value="Florianópolis">Florianópolis</option>
            <option value="Fortaleza">Fortaleza</option>
            <option value="Goiânia">Goiânia</option>
            <option value="João Pessoa">João Pessoa</option>
            <option value="Macapá">Macapá</option>
            <option value="Maceió">Maceió</option>
            <option value="Manaus">Manaus</option>
            <option value="Natal">Natal</option>
            <option value="Palmas">Palmas</option>
            <option value="Porto Alegre">Porto Alegre</option>
            <option value="Porto Velho">Porto Velho</option>
            <option value="Recife">Recife</option>
            <option value="Rio Branco">Rio Branco</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Salvador">Salvador</option>
            <option value="São Luís">São Luís</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Teresina">Teresina</option>
            <option value="Vitória">Vitória</option>

        </select><br>

        <label for="date">Marque a data que chegou ao evento:</label>
        <input type="date" name="date" id="date" value="{{ old('date') }}" required><br>

        <button type="submmit">Cadastrar</button>
        
        @if (session('success'))
            <p style="color: #086;">
                {{ session('success') }}
            </p>
        @endif

        <h1>Lista de colaboradores:</h1>

        @forelse ($colaboradores as $colaborador)
            <br>Id: {{ $colaborador->id }}
            Nome: {{ $colaborador->name }}
            Setor: {{ $colaborador->setor }}
            Cidade: {{ $colaborador->city }}
            Data de Check-in: {{ $colaborador->date }}<br>
            <a href="{{ route('colaborador.show', ['colaborador' => $colaborador ]) }}">Visualizar</a>
            <br><hr>

        @empty

        @endforelse

    </form>
</body>
</html>