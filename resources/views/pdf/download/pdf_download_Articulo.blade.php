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
      <th>Artículo de difusión y divulgación </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Autor(es)</th>
      <td>{{ $autor }}</td>
    </tr>
    <tr>
      <th scope="row">Título</th>
      <td>{{ $titulo }}</td>
    </tr>
    <tr>
      <th scope="row">estado</th>
      <td>{{ ($estado) }}</td>
    </tr>
    <tr>
      <th scope="row">País</th>
      <td>{{ ($pais) }}</td>
    </tr>
    
    <tr>
      <th scope="row">Nombre</th>
      <td>{{ ($nombre) }}</td>
    </tr>
    
    <tr>
      <th scope="row">Editorial</th>
      <td>{{ ($editorial) }}</td>
    </tr>
    <tr>
      <th scope="row">Volumen</th>
      <td>{{ ($volumen) }}</td>
    </tr>
    <tr>
      <th scope="row">ISSN</th>
      <td>{{ ($issn) }}</td>
    </tr>
    <tr>
      <th scope="row">Año</th>
      <td>{{ ($date) }}</td>
    </tr>
    <tr>
      <th scope="row">Propósito</th>
      <td>{{ ($proposito ) }}</td>
    </tr>
    <tr>
      <th scope="row">Para considerar en el 
       curriculum <br>del cuerpo académico</th>
         <td>{{ ($considerar) }}</td>
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
