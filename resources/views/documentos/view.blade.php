@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')

      <h2>{{$data->titulo}}</h2>
      <h3>{{$data->autor}}</h3>
      <h3>{{$data->descripcion}}</h3>
      <h1 align='center'>PDF</h1>
      <iframe src="{{url('storage/' .$data->file)}}"  width="100%" height="700px">
      </iframe>
  @endsection
  
