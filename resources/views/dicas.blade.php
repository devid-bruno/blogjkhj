@extends('components.layout')
@section('title', 'Página inicial')
@section('content')
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        @foreach ( $dicas as $dica)

        @endforeach
        <div class="card">
            <div class="card-body">
              {{$dica->dica}} <hr>
              <a href="{{$dica->link}}"><button class="btn btn-default btn-sm">Ir para dica</button></a>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection

