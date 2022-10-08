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
Direccion individualizada
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Titulo de la tesis o proyecto individual</th>
      <td>{{ ($titulo) }}</td>
    </tr>
    <tr>
      <th scope="row">Grado</th>
      <td>{{ ($grado) }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de inicio</th>
      <td>{{ ($fechaIni) }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de termino</th>
      <td>{{ ($fechaFin) }}</td>
    </tr>
    <tr>
      <th scope="row">Numero de alumnos</th>
      <td>{{ ($alumnos) }}</td>
    </tr>
    <tr>
      <th scope="row">Estado de la direccion individualizada</th>
      <td>{{ ($estado) }}</td>
    </tr>
    <tr>
      <th scope="row">Para considerar en curriculum de cuerpo academico</th>
      <td>{{ ($cv) }}</td>
    </tr>
    <tr>
      <th scope="row">Miembros</th>
      <td>{{ ($miembros) }}</td>
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
