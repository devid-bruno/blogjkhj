@extends('components.admin.layout')
@section('title', 'Painel')
@section('content')
  <hr>
  <div class="container">
    <form action="{{ route('admin.addpublication') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Titulo</label>
          <input type="tex" class="form-control" name="titulo" aria-describedby="emailHelp" placeholder="Titulo">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Publicação</label>
          <input type="text" class="form-control" name="publicacao" id="exampleInputPassword1" placeholder="Publicação">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection




