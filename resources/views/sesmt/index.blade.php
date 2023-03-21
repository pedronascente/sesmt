@extends('layout.app')
@section('content')


<div class="row">
  <div class="col-md-6 offset-md-3">
  <div class="card mb-4 text-center">
    <div class="card-body">
      <img  src="{{ asset('img/logo.png') }}" class="img-fluid" />
    </div>
  </div>
  
  <div class="card mb-4 ">
    <div class="card-header text-center   py-1 RVEQke"> 
    </div>
    <div class="card-body ">
      <blockquote class="blockquote px-4">
        <h1 class="F9yp7e">
          <b>AVALIAÇÃO PERFIL LABORAL</b>
        </h1>
        <p class="c2gzEf">
          A Ginástica Laboral é a prática de atividades físicas 
          leves no local de trabalho, com o objetivo de prevenir e aliviar dores e incômodos que
          ocorrem devido às atividades dos colaboradores.
        </p>
      </blockquote>
    </div>
  </div>
  <div class="card mb-4 ">
    <div class="card-body py-4">
      <blockquote class="blockquote px-4">
        <p>
          Com o intuito de melhorar nossa ginástica laboral, gostaríamos que respondesse o questionário abaixo:
        </p>
      </blockquote>
    </div>
  </div>

  <form action="{{route('store')}}" method="post">
  
  @csrf
  <div class="card mb-4 @error('pergunta1') border-error @enderror">
    <div  class="card-body "  >
      <blockquote class="blockquote mb-0">
        <h4 class="M7eMe">
            <b>#1 Quanto tempo por dia você fica sentado em um dia de semana ? <span class="_color-red">*</span></b>
        </h4>
        <div class="form-check nWQGrd">
            <input class="form-check-input" type="radio" name="pergunta1"  value="1"  @if (old('pergunta1') ==1) checked @endif >
            <label class="form-check-label">
                Entre :  1 - 2  Horas
            </label>
          </div>
          <div class="form-check nWQGrd">
            <input class="form-check-input" type="radio" name="pergunta1" value="2" @if (old('pergunta1') ==2) checked @endif >
            <label class="form-check-label">
                Entre :  2 - 3 Horas
            </label>
          </div>
          <div class="form-check nWQGrd">
            <input class="form-check-input" type="radio" name="pergunta1" value="3" @if (old('pergunta1') ==3) checked @endif >
            <label class="form-check-label">
                Entre :  3 - 4 Horas
            </label>
          </div>
          <div class="form-check nWQGrd">
            <input class="form-check-input" type="radio" name="pergunta1" value="4" @if (old('pergunta1') ==4) checked @endif >
            <label class="form-check-label">
                Entre :  4 - 5 Horas
            </label>
          </div>
          <div class="form-check nWQGrd">
            <input class="form-check-input" type="radio" name="pergunta1"  value="5"  @if (old('pergunta1') ==5) checked @endif >
            <label class="form-check-label">
                Entre :  5 - ou mais
            </label>
          </div>
          @error('pergunta1') 
              <span class="error" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </blockquote>
    </div>
  </div>
  
   <div class="card mb-4 @error('pergunta2') border-error @enderror">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <h4 class="M7eMe"> 
          <b>#2 Quanto tempo por dia você fica sentado no final de semana ? <span class="_color-red">*</span></b>
        </h4>
        <div class="form-check nWQGrd">
            <input class="form-check-input" type="radio" name="pergunta2" value="1" @if (old('pergunta2') ==1) checked @endif >
            <label class="form-check-label">
                Entre :  1 - 2  Horas
            </label>
          </div>
          <div class="form-check nWQGrd">
            <input class="form-check-input" type="radio" name="pergunta2" value="2" @if (old('pergunta2') ==2) checked @endif >
            <label class="form-check-label">
                Entre :  2 - 3 Horas
            </label>
          </div>
          <div class="form-check nWQGrd">
            <input class="form-check-input" type="radio" name="pergunta2" value="3"  @if (old('pergunta2') ==3) checked @endif >
            <label class="form-check-label">
                Entre :  3 - 4 Horas
            </label>
          </div>
          <div class="form-check nWQGrd">
            <input class="form-check-input" type="radio" name="pergunta2" value="4" @if (old('pergunta2') ==4) checked @endif >
            <label class="form-check-label">
                Entre :  4 - 5 Horas
            </label>
          </div>
          <div class="form-check nWQGrd">
            <input class="form-check-input" type="radio" name="pergunta2" value="5" @if (old('pergunta2') ==5) checked @endif >
            <label class="form-check-label">
                Entre :  5 - ou mais
            </label>
          </div>
          @error('pergunta2') 
              <span class="error" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </blockquote>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <blockquote class="blockquote ">
        <h4 class="M7eMe">
          <b>SINAIS E SINTOMAS</b>
        </h4>
         <p class="M7eMe c2gzEf">
          <b>Por favor, responda questões abaixo colocando um "X" para pergunta no quadrado apropriado.</b>
        </p>
      </blockquote>
    </div>
  </div>
  
  <div class="card mb-4">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Esta figura mostra como o corpo foi dividido, por si mesmo, qual parte está ou foi afetada, se houve alguma.</p>
        <footer class="text-center">
         <img src="{{ asset('img/corpo-humano.jpg') }}"  class="img-fluid" />
        </footer>
      </blockquote>
    </div>
  </div>

 <div class="card mb-4 @error('pergunta3') border-error @enderror">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <h4 class="M7eMe"> 
          <b>#3 Nos Últimos 12 meses, você teve problemas como dor , formigamento/dormência em: <span class="_color-red">*</span></b>
        </h4>
         @include('sesmt.form', ['pergunta'=>'pergunta3'])  
         @error('pergunta3') 
              <span class="error" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
         @enderror
      </blockquote>
    </div>
  </div>

 <div class="card mb-4 @error('pergunta4') border-error @enderror">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <h4 class="M7eMe"> 
          <b>#4 Nos Últimos 12 meses, você foi impedido(a) de realizar atividades normais (trabalho, atividades domesticas e de lazer)
           por causa desse problema em:  <span class="_color-red">*</span>
          </b>
        </h4>
        @include('sesmt.form', ['pergunta'=>'pergunta4'])  
        @error('pergunta4') 
            <span class="error" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </blockquote>
    </div>
  </div>

   <div class="card mb-4 @error('pergunta5') border-error @enderror">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <h4 class="M7eMe"> 
          <b>#5 No último ano você foi ao médico por esta queixa: <span class="_color-red">*</span></b>
        </h4>
        @include('sesmt.form', ['pergunta'=>'pergunta5'])
        @error('pergunta5') 
            <span class="error" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </blockquote>
    </div>
  </div>

 <div class="card mb-4 @error('pergunta6') border-error @enderror">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <h4 class="M7eMe"><b> #6 No último ano você foi ao médico por esta queixa: <span class="_color-red">*</span></b></h4>
        @include('sesmt.form', ['pergunta'=>'pergunta6'])  
        @error('pergunta6') 
            <span class="error" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </blockquote>
    </div>
  </div>

  <div class="card mb-4 @error('pergunta7') border-error @enderror">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <h4 class="M7eMe"> 
          <b>#7 No últimos 7 dias você teve problema em: <span class="_color-red">*</span></b>
        </h4>
         @include('sesmt.form', ['pergunta'=>'pergunta7'])  
         @error('pergunta7') 
            <span class="error" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </blockquote>
    </div>
  </div>
  <input type="submit" value="Enviar" class="btn btn-success">
</form>
  </div>
</div>

@endsection