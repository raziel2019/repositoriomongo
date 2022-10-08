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
      Capítulo de libro 
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Autor(es)</th>
      <td>{{ $autor }}</td>
    </tr>
    <tr>
      <th scope="row">Título</th>
      <td>{{ $titulo }}</td>
    </tr>
    <tr>
      <th scope="row">Estado actual</th>
      <td>{{ ($estado) }}</td>
    </tr>
    <tr>
      <th scope="row">País</th>
      <td>{{ ($pais) }}</td>
    </tr>
    <tr>
      <th scope="row">Editorial</th>
      <td>{{ ($editorial) }}</td>
    </tr>
    <tr>
      <th scope="row">Edición</th>
      <td>{{ ($edicion) }}</td>
    </tr>
    <tr>
      <th scope="row">Tiraje</th>
      <td>{{ ($tiraje) }}</td>
    </tr>
    <tr>
      <th scope="row">ISBN</th>
      <td>{{ ($isbn) }}</td>
    </tr>
    <tr>
      <th scope="row">Año</th>
      <td>{{ ($date) }}</td>
    </tr>
    <tr>
      <th scope="row">Propósito</th>
      <td>{{ ($proposito ) }}</td>
    </tr>
    </tbody>
</table>
   

</div >
@endsection
