@extends('components.layout')
@section('title', 'Página inicial')
@section('content')
    <hr>
    <div class="container text-center">
        <div class="row">
            @foreach ( $publicacoes as $publicacao )
          <div class="col">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">{{$publicacao->titulo}}</h4>
                  <p class="card-text">{{$publicacao->publicacao}}</p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                  </button>
                </div>
              </div>
          </div>
          @endforeach
        </div>
      </div>
@endsection
