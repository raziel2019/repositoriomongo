
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
      Cuerpo Academico
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nombre del cuerpo academico</th>
      <td>{{ $data->nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Clave</th>
      <td>{{ $data->clave }}</td>
    </tr>
    <tr>
      <th scope="row">Grado de consolidacion</th>
      <td>{{ ($data->grado) }}</td>
    </tr>
    <tr>
      <th scope="row">Linea(s) que cultiva el cuerpo academico</th>
      <td>{{ ($data->lineas) }}</td>
    </tr>
   </tbody>
</table>
 
  
<div style="page-break-after:always;"></div>
</table>
</div>
@endforeach  

