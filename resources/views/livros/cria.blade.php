@extends('layouts.master')

@section('title', 'Cadastro de livro')

@section('page-header-content', 'Cadastro de livro')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/livros">
            <span class="glyphicon glyphicon-th-list"></span> Livros
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/livros" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="titulo">Título</label>
          <input name="titulo" id="titulo" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="editora">Editora</label>
          <input name="editora" id="editora" type="text" class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
@endsection
