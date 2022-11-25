@extends('components.admin.layout')
@section('title', 'Painel')
@section('content')
  <hr>
  <div class="container">
    @foreach ( $publicacoes as $publicacao )
    <div class="card" style="width: 20rem;">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 text-muted">{{ $publicacao->titulo }}</h6>
          <p class="card-text">{{ $publicacao->publicacao }}</p>
          <td><a href="{{ route('admin.listpublication.excluir', $publicacao->id) }}">Exluir</a></td>
        </div>
      </div>
      @endforeach
      
</div>
@endsection

