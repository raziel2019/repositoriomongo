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
      Estadia
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nombre de la estadia</th>
      <td>{{ $nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Programa educativo</th>
      <td>{{ $programa }}</td>
    </tr>
    <tr>
      <th scope="row">Grado</th>
      <td>{{ ($grado) }}</td>
    </tr>
    <tr>
      <th scope="row">Nombre de la empresa o institucion</th>
      <td>{{ ($empresa) }}</td>
    </tr>
    <tr>
      <th scope="row">Puntos criticos a resolver</th>
      <td>{{ ($puntos) }}</td>
    </tr>
    <tr>
      <th scope="row">Resultados obtenidos o esperados</th>
      <td>{{ ($resultados) }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de Inicio</th>
      <td>{{ ($fechaIni) }}</td>
    </tr>
   <tr>
      <th scope="row">Fecha de Termino</th>
      <td>{{ ($fechaFin) }}</td>
    </tr>
    <tr>
      <th scope="row">Numero de alumnos</th>
      <td>{{ ($alumnos) }}</td>
    </tr>
    <tr>
      <th scope="row">Numero de horas</th>
      <td>{{ ($horas ) }}</td>
    </tr>
    <tr>
      <th scope="row">Estado de la direccion individualizada</th>
         <td>{{ ($estado) }}</td>
    </tr>
    <tr>
      <th scope="row">Para considerar en curriculum de cuerpo academico</th>
      <td>{{ ($considerar) }}</td>
    </tr>
    <tr>
      <th scope="row">Miembros</th>
      <td>{{ ($miembros) }}</td>
    </tr>
    <tr>
      <th scope="row">LGACs</th>
      <td>{{ ($lgacs) }}</td>
    </tr>
   </tbody>
</table>
   

</div >
@endsection
