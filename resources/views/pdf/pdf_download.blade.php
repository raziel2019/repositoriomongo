
@section('Titulo', 'Repositorio de investigaciones ')
<body>
    <div id="content">
      <h2>Aqui va el titulo: <b> <span style="color:red">{{ ucfirst($titulo) }}</span> </b></h2> 
      <h4>Aqui el Asunto: {{ $asunto}} <br> Aqui va la fecha {{$date}}</h4>
      <p>
         Esto es la descripcion:   {{ $descripcion }}
      </p>
      <p style="text-align: center;">Este es el docente: {{ $docente}}</p>
      <p style="text-align: center;">Esta es el Area: {{ $area}}</p>
    </div>
  </body>