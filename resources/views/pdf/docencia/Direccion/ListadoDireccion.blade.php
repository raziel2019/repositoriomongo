@extends('layouts.app')

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
			        <h2 class="text-black pb-2 fw-bold">Historial de Direccion Individualizada</h2>
		        </div>		
	        </div>
		</div>
    </div>
<div class="page-inner mt--5">
   			 <div class="container">
             <h4>Buscar Por Año y Periodo</h4>	
               <!--Filtro Por Cuatrimestre y año--->
               <form action="/filtroDireccion"  method="GET"  style="display: inline-block;"  class="form-group  col-md-5" >
                <label style="margin-right: 0.2rem;" id="label-search">  
                <select class="custom-select border border-secondary" id="inputGroupSelect01" style="display: inline-block; margin-right: 0.5rem;" name="cuatrimestre" required>
                                                  <option value="Enero-Abril">Enero-Abril</option>
                                                  <option value="Mayo-Agosto">Mayo-Agosto</option>     
                                                  <option value="Septiembre-Diciembre">Septiembre-Diciembre</option>   
                                              </select> 

                <input type="number" class="form-control border border-secondary" style="display: inline-block; margin-right: 0.2rem;" placeholder="filtro por año" min="2017" max="2100" name="año" required> 
                                            
                   <input type="submit"  class="btn btn-default"  style="background: #69bb85!important; border-color:#69bb85!important;" value="filtrar"></label>
                   
                </form>
                </div>
              </div>  
              
      <div class="container mt-2">
      <a class="btn btn-primary mb-1 " style="background: #69bb85!important; border-color:#69bb85!important;" href="{{route('direccion.create')}}">Registrar Direccion </a>
    
      @foreach ($file as $key=>$data)
      <form action="{{ route('direccion.select', $data->id) }}"  method="get" style="display: inline;">
      @endforeach
      @csrf
      <button type="submit" class="btn btn-dark mb-1" style="background: #69bb85!important; border-color:#69bb85!important;">Crear informe</button>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
                        <tr>
              <th><input type="checkbox" id="select-all"></th>
              <th>#</th>
              <th>Titulo</th>
              <th>Archivo</th>
              <th>Periodo</th>
              <th>Fecha de Creacion</th>
              <th>Ver </th>
              <th>Modificar </th>
              <th>Eliminar</th>
              <th>Descargar</th>
                          </tr>
                @foreach ($file as $key=>$data)
                <tr>
                <!-- Checkboxes -->
                
                    <td><input type="checkbox" name="seleccion[]" value="{{$data->id }}"></td>
                    
                            </form>
                    <!--Fin de los Checkboxes -->
                    <td>{{++$key}}</td>
                    <td>{{$data->titulo}}</td>
                    <td><a href="{{action('PdfController@pdfDireccion', $data->file)}}">{{$data->file}}</a></td>
                    <td>{{$data->cuatrimestre}}</td>
                    <td>{{$data->created_at}}</td>
                    <td><a class="btn btn-success" style="background: #69bb85!important; border-color:#69bb85!important;" href="{{action('PdfController@direccion_show', $data->id)}}">Ver </a></td>
                    <td><a class="btn btn-warning" style="background: #69bb85!important; border-color:#69bb85!important;" href="{{action('PdfController@direccion_edit', $data->id)}}">Modificar</a> </td>
                    <td>
                        <form action="{{route('direccion.destroy', $data->id)}}"  method="POST"> 
                        @method("DELETE")
                        @csrf
                       <input type="submit" class="btn btn-danger" style="background: #69bb85!important; border-color:#69bb85!important;" value="Eliminar">
                       </form>
                    </td>
                    <td><a class="btn btn-default" style="background: #69bb85!important; border-color:#69bb85!important;" href="{{action('PdfController@pdfFormDireccion', $data->id)}}">Descargar </a> </td>
                    
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
