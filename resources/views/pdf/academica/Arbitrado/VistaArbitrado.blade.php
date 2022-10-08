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
      <th scope="row">Nombre de la Revista</th>
      <td>{{ ($nombre) }}</td>
    </tr>
    <tr>
      <th scope="row">Editorial</th>
      <td>{{ ($editorial) }}</td>
    </tr>
    <tr>
      <th scope="row">Volumen</th>
      <td>{{ ($volumen) }}</td>
    </tr>
   <tr>
      <th scope="row">ISSN</th>
      <td>{{ ($issn) }}</td>
    </tr>
    <tr>
      <th scope="row">Año</th>
      <td>{{ ($date) }}</td>
    </tr>
    <tr>
      <th scope="row">Propósito</th>
      <td>{{ ($proposito ) }}</td>
    </tr>
    <tr>
      <th scope="row">Para considerar en el 
       curriculum <br>del cuerpo académico</th>
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
