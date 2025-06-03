@extends('layouts.admin')
    
@section('content')
    <h1>Editar Colaborador</h1>

    <div class="card mb-4 border-light shadow" style="width: 50rem;">
        <div class="card-header hstack gap-2">
            <span>Colaborador:</span>
            
            <span class="ms-auto">
                <a href="{{ route('colaborador.show', $colaborador) }}" >Visualização</a>
            </span>
        </div>

        <div class="card-body">
            <form class="row g-3" action="{{ route('colaborador.update', $colaborador->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <label for="name" class="form-label">Digite seu nome completo:</label>
                    <input type="text" name ="name" id="name" class="form-control" placeholder="Nome completo" value="{{ old('name', $colaborador->name) }}" required>
                </div>


                <div class="col-md-6">
                    <label for="setor" class="form-label">Selecione o setor em que trabalha:</label>
                    <select name="setor" id="setor" class="form-select" value="{{ old('setor', $colaborador->setor) }}" required>
                    <option value="Tecnologia">Tecnologia</option>
                    <option value="Administração">Administração</option>
                    <option value="Projeto">Projeto</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="city" class="form-label">Selecione a cidade em que mora:</label>
                    <select name="city" id="city" class="form-select" value="{{ old('city', $colaborador->city) }}" required>
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
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="date" class="form-label">Marque a data que chegou ao evento:</label>
                    <input type="date" name ="date" id="date" class="form-control" value="{{ old('date', $colaborador->date) }}" required>
                </div>

                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </div>
        </div>

@endsection