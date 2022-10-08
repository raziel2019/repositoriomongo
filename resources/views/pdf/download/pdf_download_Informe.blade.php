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
      <th>Informe técnico  </th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Autor(es)</th>
      <td>{{ $autor }}</td>
    </tr>
    <tr>
      <th scope="row">Nombre del estudio o proyecto realizado</th>
      <td>{{ $nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Alcance</th>
      <td>{{ $alcance }}</td>
    </tr>
    <tr>
      <th scope="row">Institución beneficiaria</th>
      <td>{{ $institucion }}</td>
    </tr>
    <tr>
      <th scope="row">Año</th>
      <td>{{ $año }}</td>
    </tr>
    <tr>
      <th scope="row">Estado actual</th>
      <td>{{ $estado }}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de elaboración del informe</th>
      <td>{{ $date  }}</td>
    </tr>
    <tr>
      <th scope="row">Paginas</th>
      <td>{{ $paginas }}</td>
    </tr>
    <tr>
      <th scope="row">País</th>
      <td>{{ $pais }}</td>
    </tr>
    <tr>
      <th scope="row">Propósito</th>
      <td>{{ $proposito }}</td>
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

