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
      Artículo arbitrado 
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Programa educativo en el que participa</th>
      <td>{{ $programa }}</td>
    </tr>
    <tr>
      <th scope="row">Nivel</th>
      <td>{{ $nivel }}</td>
    </tr>
    <tr>
      <th scope="row">Numero de Estudiantes</th>
      <td>{{ $estudiantes }}</td>
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
      <th scope="row">Actividad de Tutoria</th>
      <td>{{ ($tipo) }}</td>
    </tr>
    <tr>
      <th scope="row">Estado del tutelaje</th>
      <td>{{ ($estado) }}</td>
    </tr>
   </tbody>
</table>
   

</div >
@endsection
