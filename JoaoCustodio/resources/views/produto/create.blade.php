@extends('layouts.admin')

@section('content')

{{-- <div class="mb-4">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="mb-3">
   <label for="exampleInputIconPassword">Password</label>
   <div class="input-group">
        <input type="password" class="form-control" id="password" placeholder="Password" aria-label="Password">
        <span class="input-group-text" id="basic-addon3">
            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
        </span>
    </div>
</div>
<div class="mb-3">
    <label for="formFile" class="form-label">Default file input example</label>
    <input class="form-control" type="file" id="formFile">
</div> --}}

<form>
    <div class="card-body">
        <div class="form-group">
            <label for="inputDesig">Designação</label>
            <input type="text" class="form-control" name="inputDesig" id="inputDesig" placeholder="Insira a Designação do projeto">
        </div>
        <div>
            <label for="selectCat">Categoria</label>
            <select class="form-control select2" style="width: 100%;">
                <option value="DO" selected="selected">Selecione uma Categoria</option>
                <option value="1">Carros</option>
                <option value="2">Desporto</option>
                <option value="3">Paisagens</option>
                <option value="4">Paisagens</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputAluno">Aluno(s) Responsável(eis)</label>
            <input type="text" class="form-control" id="inputAluno" name="inputAluno" placeholder="Insira o(s) nome(s) do(s) aluno(s) responsável(eis) pelo projeto">
        </div>
        <div class="form-group">
            <label for="inputData">Data de Início do Projeto</label>
            <input type="date" class="form-control" id="inputData" name="inputData">
        </div>
        <div class="form-group">
            <label for="inputGit">Github</label>
            <input type="text" class="form-control" id="inputGit" name="inputGit" placeholder="Insira o link do github do projeto">
        </div>
        <div class="form-group">
            <label for="textDesc">Descrição</label>
            <textarea class="form-control" rows="5" id="textDesc" placeholder="Descreva aqui o projeto"></textarea>
        </div>
        <div class="form-group">
            <label for="inputFotos">Fotos</label>
            <div class="input-group">
                <div class="mb-3">
                    {{-- <input type="file" class="custom-file-input" id="inputFotos" name="inputFotos"> --}}
                    <input class="form-control" type="file" id="inputFotos" name="inputFotos">
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="reset" class="btn btn-warning" id="btnLimpar" name="btnLimpar">Limpar</button>
        <button type="submit" class="btn btn-primary" id="btnEnviar" name="btnEnviar">Enviar</button>
    </div>
</form>
@endsection
