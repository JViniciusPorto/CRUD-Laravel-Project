<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('colaborador.create') }}">Voltar à tela de cadastro</a><br>
    <a href="{{ route('colaborador.show', $colaborador) }}">Voltar à tela de vizualização</a>
    <h1>Editar Colaborador</h1>

    <form action="{{ route('colaborador.update', $colaborador->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" placeholder="Nome completo" value="{{ old('name', $colaborador->name) }}" required><br>

        <label for="setor">Setor:</label>
        <select name="setor" id="setor" value="{{ old('setor', $colaborador->setor) }}" required> 
            <option value="tec">Tecnologia</option>
            <option value="adm">Administração</option>
            <option value="proj">Projeto</option>
        </select><br>

        <label for="city">Cidade:</label>
        <select name="city" id="city" value="{{ old('city', $colaborador->city) }}" required>
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

        <label for="date">Data de Check-in:</label>
        <input type="date" name="date" id="date" value="{{ old('date', $colaborador->date) }}" required><br>

        <button type="submmit">Salvar</button>
    </form>
</body>
</html>