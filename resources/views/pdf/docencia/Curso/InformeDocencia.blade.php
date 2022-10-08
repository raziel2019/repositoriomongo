
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
      Curso
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nombre del curso</th>
      <td>{{ $data->nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Institucion de Educacion Superior (IES)</th>
      <td>{{ $data->institucion }}</td>
    </tr>
    <tr>
      <th scope="row">Programa educativo</th>
      <td>{{ ($data->programa) }}</td>
    </tr>
    <tr>
      <th scope="row">Cuatrimestre</th>
      <td>{{ ($data->cuatrimestre) }}</td>
    </tr>
    <tr>
      <th scope="row">Grupo</th>
      <td>{{ ($data->grupo) }}</td>
    </tr>
    <tr>
      <th scope="row">Nivel</th>
      <td>{{ ($data->nivel) }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de Inicio</th>
      <td>{{ ($data->fechaIni) }}</td>
    </tr>
   <tr>
      <th scope="row">Numero de alumnos</th>
      <td>{{ ($data->alumnos) }}</td>
    </tr>
    <tr>
      <th scope="row">Duracion en semanas</th>
      <td>{{ ($data->duracion) }}</td>
    </tr>
    <tr>
      <th scope="row">Horas de asesoria al mes</th>
         <td>{{ ($data->hMes) }}</td>
    </tr>
    <tr>
      <th scope="row">Horas semanales dedicadas a este curso</th>
      <td>{{ ($data->hSemana) }}</td>
    </tr>
   </tbody>
 
  
   <div style="page-break-after:always;"></div>
</table>
</div>
@endforeach  

