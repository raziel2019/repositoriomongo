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
      <th>Informe técnico  </th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Autor(es)</th>
      <td>{{ $data->autor }}</td>
    </tr>
    <tr>
      <th scope="row">Nombre del estudio o proyecto realizado</th>
      <td>{{ $data->nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Alcance</th>
      <td>{{ $data->alcance }}</td>
    </tr>
    <tr>
      <th scope="row">Institución beneficiaria</th>
      <td>{{ $data->institucion }}</td>
    </tr>
    <tr>
      <th scope="row">Año</th>
      <td>{{ $data->año }}</td>
    </tr>
    <tr>
      <th scope="row">Estado actual</th>
      <td>{{ $data->estado }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de elaboración del informe</th>
      <td>{{ $data->date  }}</td>
    </tr>
    <tr>
      <th scope="row">Paginas</th>
      <td>{{ $data->paginas }}</td>
    </tr>
    <tr>
      <th scope="row">País</th>
      <td>{{ $data->pais }}</td>
    </tr>
    <tr>
      <th scope="row">Propósito</th>
      <td>{{ $data->proposito }}</td>
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

