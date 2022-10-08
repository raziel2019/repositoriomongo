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
      Capacitacion taller/curso
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Tipo</th>
      <td>{{ $tipo }}</td>
    </tr>
    <tr>
      <th scope="row">Nombre</th>
      <td>{{ $nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Descripcion</th>
      <td>{{ ($descripcion) }}</td>
    </tr>
    <tr>
      <th scope="row">Duracion</th>
      <td>{{ ($duracion) }}</td>
    </tr>
    <tr>
      <th scope="row">Lugar</th>
      <td>{{ ($lugar) }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha</th>
      <td>{{ ($fecha) }}</td>
    </tr>
    <tr>
      <th scope="row">Instructor</th>
      <td>{{ ($instructor) }}</td>
    </tr>
   <tr>
      <th scope="row">Grupo</th>
      <td>{{ ($grupo) }}</td>
    </tr>
   </tbody>
</table>
   

</div >
@endsection
