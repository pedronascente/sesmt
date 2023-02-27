@extends('layout.app')
@section('content')

<div class="row">
  <div class="col-md-6 offset-md-3">
    <div class="card mb-4 text-center">
      <div class="card-body">
        <img src="{{ asset('img/logo.png') }}" class="img-fluid" />
      </div>
  </div>
  
  <div class="card mb-4 ">
    <div class="card-header text-center   py-1 RVEQke"> 
    </div>
    <div class="card-body ">
      <blockquote class="blockquote px-4">
        <h1 class="F9yp7e">
          <b>AVALIAÇÃO PERFIL LABORAL</b>
        </h1><br>
        
        <p>
          Sua resposta foi registrada.
        </p>

        <div class="c2gzEf">
          <a href="{{route('index')}}">
              Enviar outra resposta
          </a>
        </div>
      </blockquote>
    </div>
  </div>
  </div>
</div>

@endsection