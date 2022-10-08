@extends('layouts.supervisor')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')


<style>
@media (max-width: 600px) {
  #label-search {
    display: grid !important;
  }
}
</style>

<div class="panel-header colorut" >
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			    <div>
			        <h2 class="text-black pb-2 fw-bold">Historial Capitulo de Libro</h2>
		        </div>		
	        </div>
		</div>
    </div>
<div class="page-inner mt--5">
   	
      <div class="container mt-2">    
      @foreach ($file as $key=>$data)
      <form action="{{ route('libro.select', $data->id) }}"  method="get" style="display: inline;">
      @endforeach
      @csrf
      <button type="submit" class="btn btn-dark mb-1" style="background: #69bb85!important; border-color:#69bb85!important;">Crear informe</button>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
                        <tr>
              <th><input type="checkbox" id="select-all"></th>
              <th>#</th>
              <th>PTC</th>
              <th>Titulo</th>
              <th>Archivo</th>
              <th>Periodo</th>
              <th>Fecha de Creacion</th>
              <th>Ver </th>
                          </tr>
                @foreach ($file as $key=>$data)
                <tr>
                <!-- Checkboxes -->
                
                    <td><input type="checkbox" name="seleccion[]" value="{{$data->id }}"></td>
                    
                            </form>
                    <!--Fin de los Checkboxes -->
                    <td>{{++$key}}</td>
                    <td>{{$data->user->name}}</td>
                    <td>{{$data->titulo}}</td>
                    <td><a href="{{action('PdfController@pdfLibro', $data->file)}}">{{$data->file}}</a></td>
                    <td>{{$data->cuatrimestre}}</td>
                    <td>{{$data->created_at}}</td>
                    <td><a class="btn btn-success" style="background: #69bb85!important; border-color:#69bb85!important;" href="{{action('PdfController@libro_show', $data->id)}}">Ver </a></td>
                    </tr>
                @endforeach
                            </table>                     
                        </div>
                    </div>
<script>

document.getElementById('select-all').onclick = function() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  for (var checkbox of checkboxes) {
    checkbox.checked = this.checked;
  }
}
</script>
<!-- Fin de apartado de formulario -->

@endsection
