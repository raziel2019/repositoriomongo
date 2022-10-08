
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
      Direccion individualizada
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Titulo de la tesis o proyecto individual</th>
      <td>{{ $data->titulo }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de inicio</th>
      <td>{{ $data->fechaIni }}</td>
    </tr>
    <tr>
      <th scope="row">Grado</th>
      <td>{{ ($data->grado) }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de termino</th>
      <td>{{ ($data->fechaFin) }}</td>
    </tr>
    <tr>
      <th scope="row">Numero de alumnos</th>
      <td>{{ ($data->alumnos) }}</td>
    </tr>
    <tr>
      <th scope="row">Estado de la direccion individualizada</th>
      <td>{{ ($data->estado) }}</td>
    </tr>
    <tr>
      <th scope="row">Para considerar en curriculum de cuerpo academico</th>
      <td>{{ ($data->cv) }}</td>
    </tr>
   <tr>
      <th scope="row">Miembros</th>
      <td>{{ ($data->miembros) }}</td>
    </tr>
    <tr>
      <th scope="row">LGACs</th>
      <td>{{ ($data->lgacs) }}</td>
    </tr>
   </tbody>
   <div style="page-break-after:always;"></div>
</table> 
</div>
@endforeach 