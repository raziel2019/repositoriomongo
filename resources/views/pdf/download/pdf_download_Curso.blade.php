@section('Titulo', 'Repositorio de investigaciones ')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body>
<div class="content">
<img src="./images/bueno.png" alt="Logo ut"  width="700" height="100"/><br>
<br>
<br>
<table  class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Tipo</th>
      <th>
    Cursos
     </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nombre del curso</th>
      <td>{{ ($nombre) }}</td>
    </tr>
    <tr>
      <th scope="row">Institucion de Educacion Superior (IES)</th>
      <td>{{ ($institucion) }}</td>
    </tr>
    <tr>
      <th scope="row">Programa Educativo</th>
      <td>{{ ($programa) }}</td>
    </tr>
    <tr>
      <th scope="row">Cuatrimestre</th>
      <td>{{ ($cuatri) }}</td>
    </tr>
    <tr>
      <th scope="row">Grupo</th>
      <td>{{ ($grupo) }}</td>
    </tr>
    <tr>
      <th scope="row">Nivel</th>
      <td>{{ ($nivel) }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de inicio</th>
      <td>{{ ($fecha) }}</td>
    </tr>
    <tr>
      <th scope="row">Numero de alumnos</th>
      <td>{{ ($alumnos) }}</td>
    </tr>
    <tr>
      <th scope="row">Duracion en semanas</th>
      <td>{{ ($duracion) }}</td>
    </tr>
    <tr>
      <th scope="row">Horas de asesoria al mes</th>
      <td>{{ ($hMes) }}</td>
    </tr>
    <tr>
      <th scope="row">Horas semanales dedicadas a este curso</th>
      <td>{{ ($hSemana) }}</td>
    </tr>
   </tbody>
</table>
   

</div >

<div class="copyright ml-auto text-center">
		<br>	
    				<b>Copyright</b> Universidad Tecnológica de Cancún @ 2020
          
						</div>	


  </body>
