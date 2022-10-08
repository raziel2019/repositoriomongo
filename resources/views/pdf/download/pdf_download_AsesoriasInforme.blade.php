@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')

<div class="container bg-white">
<img class="img-fluid"src="../images/bueno.png" alt="Logo ut"  style="display:block; margin:auto;"/><br>
</div>
@foreach ($selecciones as $key=>$data)
<div class="p-3">

<table  class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Tipo</th>
      <th>Asesoria </th>
    </tr>
  </thead>
  <tbody>
    <tr> 
      <th scope="row">Nombre del Estudio o proyecto realizado</th>
    
      <td>{{$data->nombre}}</td>
     
    </tr>
    <tr>
      <th scope="row">Alcance/Objetivo</th>
      <td>{{$data->alcance}}</td>
    </tr>
    <tr>
      <th scope="row">Empresa o Dependencia Beneficiaria</th>
      <td>{{$data->empresa}}</td>
    </tr>
    <tr>
      <th scope="row">País</th>
      <td>{{$data->pais}}</td>
    </tr>
    <tr>
      <th scope="row">Año</th>
      <td>{{$data->fecha}}</td>
    </tr>
    <tr>
      <th scope="row">Estado actual</th>
      <td>{{$data->estado}}</td>
    </tr>
    <tr>
      <th scope="row">Otros investigadores participantes</th>
      <td>{{$data->investigadores}}</td>
    </tr>
    <tr>
      <th scope="row">Para considerar en el 
       curriculum <br>del cuerpo académico</th>
         <td>{{$data->curriculum_de_cuerpo_academico}}</td>
    </tr>
    <tr>
      <th scope="row">Miembros</th>
      <td>{{$data->miembros}}</td>
    </tr>
    <tr>
      <th scope="row">LGACs</th>
      <td>{{$data->lgacs}}</td>
    </tr>
   </tbody>
   @endforeach
</table>
</div>

	

@endsection
