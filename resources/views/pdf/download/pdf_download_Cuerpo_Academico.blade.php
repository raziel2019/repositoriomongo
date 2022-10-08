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
Cuerpos Academicos
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nombre del cuerpo academico</th>
      <td>{{ ($nombre) }}</td>
    </tr>
    <tr>
      <th scope="row">Clave</th>
      <td>{{ ($clave) }}</td>
    </tr>
    <tr>
      <th scope="row">Grado de consolidacion</th>
      <td>{{ ($grado) }}</td>
    </tr>
    <tr>
      <th scope="row">Linea(s) que cultiva el cuerpo academico</th>
      <td>{{ ($lineas) }}</td>
    </tr>
   </tbody>
</table>
   

</div >

<div class="copyright ml-auto text-center">
		<br>	
    				<b>Copyright</b> Universidad Tecnológica de Cancún @ 2020
          
						</div>	


  </body>
