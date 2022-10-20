@extends('adminlte::page')

@section('title', 'Cadastrar Nova Subcategoria')

{{-- @section('content_header')
  <h1>Dashboard</h1> 
@stop --}}

@section('content')
  {!! Form::open(['route' => 'admin.subcategories.store', 'autocomplete' => 'off', 'files' => true]) !!}
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-10 col-lg-10 mt-2">
      <div class="w3-card-4">
        <header class="w3-container w3-dark-gray">
          <h3>NOVA SUBCATEGORIA</h3>
        </header>
        <div class="w3-container">
          @include('admin.subcategories._partials.form')

        </div>
        <footer>
          <div class="row justify-content-around">
            <a href="{{ route('admin.subcategories.index') }}" class="btn btn-outline-dark mb-3">CANCELAR</a>
            {!! Form::submit('SALVAR', ['class' => 'btn btn-dark mb-3']) !!}
          </div>
        </footer>
      </div>
    </div>
  </div>

{!! Form::close() !!}
@stop

@section('css')
  <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    
@stop