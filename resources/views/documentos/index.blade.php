
@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')

<!-- Bootstrap CSS -->
<div class="panel-header colorut" >
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			    <div>
			        <h2 class="text-black pb-2 fw-bold">Historial de documentos</h2>
		        </div>		
	        </div>
		</div>
    </div>
    
	<div class="page-inner mt--5">
   			 <div class="container">
             <h4>Buscar Por Año y Periodo</h4>	
             <div class="d-block">
              <!--Filtro Cuatrimestre--->
                  <form action="/fechas" method="GET" class="form-group  col-md-5" style="display: inline-block;" >
                  <div style="display:flex; align-items: baseline;">     
                    <label style="margin-right: 0.2rem;">Cuatrimestre:</label>     
                    <select class="custom-select border border-secondary" id="inputGroupSelect01" style="display: inline-block; margin-right: 0.5rem;" name="fechas">
                                                  <option value="Enero-Abril">Enero-Abril</option>
                                                  <option value="Mayo-Agosto">Mayo-Agosto</option>     
                                                  <option value="Septiembre-Diciembre">Septiembre-Diciembre</option>   
                                              </select> 
                                              
                    <input type="submit"  class="btn btn-default" style="display: inline-block;" value="filtrar">
                    </div>
                </form>
                <!-- Fin de filtro -->
            
            <!--Filtro por año--->
               
                <form action="/fechaActual"  method="GET"  style="display: inline-block;"  class="form-group  col-md-5" >
                <label style="margin-right: 0.2rem;">Año:  
                   <input type="number" class="form-control border border-secondary" style="display: inline-block; margin-right: 0.2rem;" placeholder="filtro por año" min="2017" max="2100" name="fechaActual"> 
                   <input type="submit"  class="btn btn-default"  style="display: inline-block;"value="filtrar"></label>
    </form>
    <!-- Fin de filtro -->
    </div>
                  </div>  
    <div class="container">
        <div class="table-wrapper table-responsive-lg">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                          <table id="dtHorizontalExample" class="table table-striped " >

          <tr>
              <th>#</th>
              <th>Titulo</th>
              <th>Autor</th>
              <th>Tipo de Documento</th>
              <th>Periodo</th>
              <th>Ver</th>
              <th>Descargar</th>
              <th>Fecha de Creacion</th>
              <th>Eliminar</th>
            </tr>
                @foreach ($file as $key=>$data)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$data->titulo}}</td>
                    <td>{{$data->autor}}</td>
                    <td>{{$data->tipo}}</td>
                    <td>{{$data->cuatrimestre}}</td>
                    <td><a class="btn btn-success" href="/files/{{$data->id}}">ver</a></td>
                    <td><a class="btn btn-success" href="/file/download/{{$data->file}}">Descargar</a> </td>
                    <td>{{$data->created_at}}</td>
                    <td>
                        <form action="{{route('archivos.destroy', $data->id)}}"  method="POST"> 
                        @method("DELETE")
                        @csrf
                       <input type="submit" class="btn btn-danger" value="Eliminar">
                       </form>
                    </td>
                    </tr>
                @endforeach
      </table>

      <table id="dtHorizontalExample" class="table table-striped " >

<tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Tipo de Documento</th>
    <th>documento</th>
    <th>Fecha de Creacion</th>
    <th>Ver</th>
    <th>Integrar</th>
  </tr>
      @foreach ($file as $key=>$data)
      <tr>
          <td>{{++$key}}</td>
          <td>{{$data->titulo}}</td>
          <td>{{$data->autor}}</td>
          <td>{{$data->file}}</td>
          <td>{{$data->cuatrimestre}}</td>
          <td><a class="btn btn-success" href="/files/{{$data->id}}">ver</a></td>
          <td><a class="btn btn-success" href="/file/download/{{$data->file}}">Descargar</a> </td>
          <td>{{$data->created_at}}</td>
          <td>
              <form action="{{route('archivos.destroy', $data->id)}}"  method="POST"> 
              @method("DELETE")
              @csrf
             <input type="submit" class="btn btn-danger" value="Eliminar">
             </form>
          </td>
          </tr>
      @endforeach
</table>

     
      
      @endsection