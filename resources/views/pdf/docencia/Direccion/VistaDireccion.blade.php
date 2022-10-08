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
     Direccion individualizada
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Titulo de la tesis o proyecto individual</th>
      <td>{{ $titulo }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de inicio</th>
      <td>{{ $fechaIni }}</td>
    </tr>
    <tr>
      <th scope="row">Grado</th>
      <td>{{ ($grado) }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de termino</th>
      <td>{{ ($fechaFin) }}</td>
    </tr>
    <tr>
      <th scope="row">Numero de alumnos</th>
      <td>{{ ($alumnos) }}</td>
    </tr>
    <tr>
      <th scope="row">Estado de la direccion individualizada</th>
      <td>{{ ($estado) }}</td>
    </tr>
    <tr>
      <th scope="row">Para considerar en curriculum de cuerpo academico</th>
      <td>{{ ($cv) }}</td>
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
