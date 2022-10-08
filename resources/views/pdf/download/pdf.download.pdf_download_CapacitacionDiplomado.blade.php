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
      <th>Capacitacion taller/curso</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Tipo</th>
      <td>{{ $tipo }}</td>
    </tr>
    <tr>
      <th scope="row">Nombre</th>
      <td>{{ $nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Descripcion</th>
      <td>{{ ($descripcion) }}</td>
    </tr>
    <tr>
      <th scope="row">Duracion</th>
      <td>{{ ($duracion) }}</td>
    </tr>
    <tr>
      <th scope="row">Lugar</th>
      <td>{{ ($lugar) }}</td>
    </tr>
    <tr>
      <th scope="row">Contenido</th>
      <td>{{ ($contenido) }}</td>
    </tr>
   </tbody>
</table>
   

</div >

<div class="copyright ml-auto text-center">
		<br>	
    				<b>Copyright</b> Universidad Tecnológica de Cancún @ 2020
          
						</div>	


  </body>

