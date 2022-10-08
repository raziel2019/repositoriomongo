
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
      Capacitacion
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Tipo</th>
      <td>{{ $data->tipo }}</td>
    </tr>
    <tr>
      <th scope="row">Nombre</th>
      <td>{{ $data->nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Descripcion</th>
      <td>{{ ($data->descripcion) }}</td>
    </tr>
    <tr>
      <th scope="row">Duracion</th>
      <td>{{ ($data->duracion) }}</td>
    </tr>
    <tr>
      <th scope="row">Lugar</th>
      <td>{{ ($data->lugar) }}</td>
    </tr>
    <tr>
      <th scope="row">Contenido</th>
      <td>{{ ($data->contenido) }}</td>
    </tr>
   </tbody>
 
  
   <div style="page-break-after:always;"></div>
</table>
</div>
@endforeach  

