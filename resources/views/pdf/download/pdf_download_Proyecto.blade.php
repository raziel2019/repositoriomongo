@section('Titulo', 'Repositorio de investigaciones ')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body>
<div class="content">
<img src="./images/bueno.png" alt="Logo ut"  width="700" height="100"/><br>
<br>
<br>
<table  class="table table-bordered">

  <tbody>
  <tr>
      <th scope="row">Título del proyecto</th>
      <td>{{ $titulo }}</td>
    </tr>
    <tr>
      <th scope="row">Nombre del patrocinador</th>
      <td>{{ $nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de inicio</th>
      <td>{{ $fecha }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de fin del proyecto</th>
      <td>{{ $fecha_termino }}</td>
    </tr>
    <tr>
      <th scope="row">Tipo de patrocinador</th>
      <td>{{ $tipo }}</td>
    </tr>
    <tr>
      <th scope="row">Investigadores<br> participantes </th>
      <td>{{ $investigadores  }}</td>
    </tr>
    <tr>
      <th scope="row">Alumnos<br> participantes </th>
      <td>{{ $alumnos  }}</td>
    </tr>
    <tr>
      <th scope="row">Actividades<br>realizadas</th>
      <td>{{ $actividades  }}</td>
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

<div class="copyright ml-auto text-center">
		<br>	
    				<b>Copyright</b> Universidad Tecnológica de Cancún @ 2020
          
						</div>	


  </body>

