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
      Artículo arbitrado 
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Programa educativo en el que participa</th>
      <td>{{ $data->programa }}</td>
    </tr>
    <tr>
      <th scope="row">Nivel</th>
      <td>{{ $data->nivel }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de Inicio</th>
      <td>{{ ($data->fechaIni) }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de Termino</th>
      <td>{{ ($data->fechaFin) }}</td>
    </tr>
    <tr>
      <th scope="row">Actividad de Tutoria</th>
      <td>{{ ($data->tipo) }}</td>
    </tr>
    <tr>
      <th scope="row">Estado del tutelaje</th>
      <td>{{ ($data->estado) }}</td>
    </tr>
   </tbody>
 
  
   <div style="page-break-after:always;"></div>
</table> 
</div>
@endforeach 

