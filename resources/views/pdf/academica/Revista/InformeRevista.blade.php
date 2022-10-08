
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
Artículo en revista indexada 
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
      <th scope="row">Descripción</th>
      <td>{{ ($data->descripcion) }}</td>
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
      <th scope="row">Nombre de la Revista</th>
      <td>{{ ($data->nombre) }}</td>
    </tr>
    <tr>
      <th scope="row">Editorial</th>
      <td>{{ ($data->editorial) }}</td>
    </tr>
    <tr>
      <th scope="row">De la página</th>
      <td>{{ ($data->pagina) }}</td>
    </tr>
    <tr>
      <th scope="row">A la página</th>
      <td>{{ ($data->pagina2) }}</td>
    </tr>
    <tr>
      <th scope="row">Volumen</th>
      <td>{{ ($data->volumen) }}</td>
    </tr>
    <tr>
      <th scope="row">Índice de registro de la revista</th>
      <td>{{ ($data->indice) }}</td>
    </tr>
    <tr>
      <th scope="row">ISSN</th>
      <td>{{ ($data->issn) }}</td>
    </tr>
    <tr>
      <th scope="row">Año</th>
      <td>{{ ($data->date) }}</td>
    </tr>
    <tr>
      <th scope="row">Dirección electrónica del artículo</th>
      <td>{{ ($data->direccion) }}</td>
    </tr>
    <tr>
      <th scope="row">Propósito</th>
      <td>{{ ($data->proposito ) }}</td>
    </tr>
    <tr>
      <th scope="row">Para considerar en el 
       curriculum <br>del cuerpo académico</th>
         <td>{{ ($data->curriculum_de_cuerpo_academico) }}</td>
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
