@extends('adminlte::page')

@section('title', 'Subcategorias')

{{-- @section('content_header')
    <h1>Categorias</h1>
@stop --}}

@section('content')
<div class="w3-card-4">
  @livewire('admin.subcategory-component')
  
</div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    
@stop