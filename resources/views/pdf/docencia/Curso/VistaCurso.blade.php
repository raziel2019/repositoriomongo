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
      <th>
      Curso
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nombre del curso</th>
      <td>{{ $nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Institucion de Educacion Superior (IES)</th>
      <td>{{ $institucion }}</td>
    </tr>
    <tr>
      <th scope="row">Programa educativo</th>
      <td>{{ ($programa) }}</td>
    </tr>
    <tr>
      <th scope="row">Cuatrimestre</th>
      <td>{{ ($cuatrimestre) }}</td>
    </tr>
    <tr>
      <th scope="row">Grupo</th>
      <td>{{ ($grupo) }}</td>
    </tr>
    <tr>
      <th scope="row">Nivel</th>
      <td>{{ ($nivel) }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de Inicio</th>
      <td>{{ ($fechaIni) }}</td>
    </tr>
   <tr>
      <th scope="row">Numero de alumnos</th>
      <td>{{ ($alumnos) }}</td>
    </tr>
    <tr>
      <th scope="row">Duracion en semanas</th>
      <td>{{ ($duracion) }}</td>
    </tr>
    <tr>
      <th scope="row">Horas de asesoria al mes</th>
         <td>{{ ($hMes) }}</td>
    </tr>
    <tr>
      <th scope="row">Horas semanales dedicadas a este curso</th>
      <td>{{ ($hSemana) }}</td>
    </tr>
   </tbody>
</table>
   

</div >
@endsection
