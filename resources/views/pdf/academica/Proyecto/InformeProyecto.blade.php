
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
      <th>Proyecto </th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Título del proyecto</th>
      <td>{{ $data->titulo }}</td>
    </tr>
    <tr>
      <th scope="row">Nombre del patrocinador</th>
      <td>{{ $data->nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de inicio</th>
      <td>{{ $data->fecha }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de fin del proyecto</th>
      <td>{{ $data->fecha_termino }}</td>
    </tr>
    <tr>
      <th scope="row">Tipo de patrocinador</th>
      <td>{{ $data->tipo }}</td>
    </tr>
    <tr>
      <th scope="row">Investigadores<br> participantes </th>
      <td>{{ $data->investigadores  }}</td>
    </tr>
    <tr>
      <th scope="row">Alumnos<br> participantes </th>
      <td>{{ $data->alumnos  }}</td>
    </tr>
    <tr>
      <th scope="row">Actividades<br>realizadas</th>
      <td>{{ $data->actividades  }}</td>
    </tr>

    <tr>
      <th scope="row">Para considerar en el 
       curriculum <br>del cuerpo académico</th>
         <td>{{ $data->curriculum_de_cuerpo_academico }}</td>
    </tr>
    <tr>
      <th scope="row">Miembros</th>
      <td>{{ $data->miembros }}</td>
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

   




