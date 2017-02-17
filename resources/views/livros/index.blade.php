@extends('layouts.master')

@section('title', 'Livros')

@section('page-header-content', 'Livros')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Ações</h3></div>
        <div class="panel-body">
          <a href="/livros/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Livros
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Editora</th>
          </tr>
        </thead>
        <tbody>
          @foreach($livros as $livros)
            <tr>
              <td>{{ $livros->id }}</td>
              <td>{{ $livros->titulo }}</td>
              <td>{{ $livros->editora }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
