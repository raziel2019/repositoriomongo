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
      <th>Proyecto </th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Título del proyecto</th>
      <td>{{ $titulo }}</td>
    </tr>
    <tr>
      <th scope="row">Nombre del patrocinador</th>
      <td>{{ $nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de inicio</th>
      <td>{{ $fecha }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de fin del proyecto</th>
      <td>{{ $fecha_termino }}</td>
    </tr>
    <tr>
      <th scope="row">Tipo de patrocinador</th>
      <td>{{ $tipo }}</td>
    </tr>
    <tr>
      <th scope="row">Investigadores<br> participantes </th>
      <td>{{ $investigadores  }}</td>
    </tr>
    <tr>
      <th scope="row">Alumnos<br> participantes </th>
      <td>{{ $alumnos  }}</td>
    </tr>
    <tr>
      <th scope="row">Actividades<br>realizadas</th>
      <td>{{ $actividades  }}</td>
    </tr>

    <tr>
      <th scope="row">Para considerar en el 
       curriculum <br>del cuerpo académico</th>
         <td>{{ $curriculum_de_cuerpo_academico }}</td>
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
   




