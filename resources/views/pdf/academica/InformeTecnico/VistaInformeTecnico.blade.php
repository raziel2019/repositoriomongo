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
      <th>Informe técnico  </th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Autor(es)</th>
      <td>{{ $autor }}</td>
    </tr>
    <tr>
      <th scope="row">Nombre del estudio o proyecto realizado</th>
      <td>{{ $nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Alcance</th>
      <td>{{ $alcance }}</td>
    </tr>
    <tr>
      <th scope="row">Institución beneficiaria</th>
      <td>{{ $institucion }}</td>
    </tr>
    <tr>
      <th scope="row">Año</th>
      <td>{{ $año }}</td>
    </tr>
    <tr>
      <th scope="row">Estado actual</th>
      <td>{{ $estado }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de elaboración del informe</th>
      <td>{{ $date  }}</td>
    </tr>
    <tr>
      <th scope="row">Paginas</th>
      <td>{{ $paginas }}</td>
    </tr>
    <tr>
      <th scope="row">País</th>
      <td>{{ $pais }}</td>
    </tr>
    <tr>
      <th scope="row">Propósito</th>
      <td>{{ $proposito }}</td>
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
   

</div >
@endsection

