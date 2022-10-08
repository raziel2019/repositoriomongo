<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

@foreach ($selecciones as $data)
<img class="img-fluid"src="./images/bueno.png" alt="Logo ut"  style="display:block; margin:auto;"/><br>
<br>
<br>
<br>
<br>

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
      <td>{{ $data->autor }}</td>
    </tr>
    <tr>
      <th scope="row">Título</th>
      <td>{{ $data->titulo }}</td>
    </tr>
    <tr>
      <th scope="row">Estado actual</th>
      <td>{{ ($data->estado) }}</td>
    </tr>
    <tr>
      <th scope="row">País</th>
      <td>{{ ($data->pais) }}</td>
    </tr>
    <tr>
      <th scope="row">Editorial</th>
      <td>{{ ($data->editorial) }}</td>
    </tr>
    <tr>
      <th scope="row">Edición</th>
      <td>{{ ($data->edicion) }}</td>
    </tr>
    <tr>
      <th scope="row">Tiraje</th>
      <td>{{ ($data->tiraje) }}</td>
    </tr>
    <tr>
      <th scope="row">ISBN</th>
      <td>{{ ($data->isbn) }}</td>
    </tr>
    <tr>
      <th scope="row">Año</th>
      <td>{{ ($data->date) }}</td>
    </tr>
    <tr>
      <th scope="row">Propósito</th>
      <td>{{ ($data->proposito ) }}</td>
    </tr>
    </tbody>
    <div style="page-break-after:always;"></div>
</table>
</div>
@endforeach  
