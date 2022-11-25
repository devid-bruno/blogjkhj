@extends('components.admin.layout')
@section('title', 'Painel')
@section('content')
  <hr>
  <div class="container">
    <form action="{{ route('admin.adddica') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Dica</label>
          <input type="tex" class="form-control" name="dica" aria-describedby="emailHelp" placeholder="dica">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Link</label>
          <input type="text" class="form-control" name="link" id="exampleInputPassword1" placeholder="Link">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection




