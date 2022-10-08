@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')
<div class="container bg-white">
<img class="img-fluid"src="../images/bueno.png" alt="Logo ut"  style="display:block; margin:auto;"/><br>
</div>
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
      <td>{{ $nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Alcance/Objetivo</th>
      <td>{{ $alcance }}</td>
    </tr>
    <tr>
      <th scope="row">Empresa o Dependencia Beneficiaria</th>
      <td>{{ ($empresa) }}</td>
    </tr>
    <tr>
      <th scope="row">País</th>
      <td>{{ ($pais) }}</td>
    </tr>
    <tr>
      <th scope="row">Año</th>
      <td>{{ ($fecha) }}</td>
    </tr>
    <tr>
      <th scope="row">Estado actual</th>
      <td>{{ ($estado ) }}</td>
    </tr>
    <tr>
      <th scope="row">Otros investigadores participantes</th>
      <td>{{ ($investigadores ) }}</td>
    </tr>
    <tr>
      <th scope="row">Para considerar en el 
       curriculum <br>del cuerpo académico</th>
         <td>{{ ($curriculum_de_cuerpo_academico) }}</td>
    </tr>
    <tr>
      <th scope="row">Miembros</th>
      <td>{{ $miembros }}</td>
    </tr>
    <tr>
      <th scope="row">LGACs</th>
      <td>{{ ($lgacs) }}</td>
    </tr>
   </tbody>
</table>
</div>

	

@endsection
