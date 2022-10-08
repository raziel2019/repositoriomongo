@extends('layouts.admin')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')


<!-- Bootstrap CSS -->
<div class="panel-header colorut" >
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			    <div>
			        <h2 class="text-black pb-2 fw-bold">Historial de Usuarios</h2>
		        </div>		
	        </div>
		</div>
    </div>
    
	<div class="page-inner mt--5">
   			 <div class="container">
             <h4>Buscar Por Nombre y Division</h4>	
             <div class="d-block">
              <!--Filtro por Division--->
                  <form action="/division" method="GET" class="form-group  col-md-5" style="display: inline-block;" >
                  <div style="display:flex; align-items: baseline;">     
                    <label style="margin-right: 0.2rem;">Division:</label>     
                    <select class="custom-select border border-secondary" id="inputGroupSelect01" style="display: inline-block; margin-right: 0.5rem;" name="division">
                                    <option value="Económico-Administrativa">Económico-Administrativa</option>
                                    <option value="Gastronomia">Gastronomia</option>
                                    <option value="Turismo">Turismo</option>
                                    <option value="Ingeniería y Tecnología">Ingeniería y Tecnología</option>  
                                              </select> 
                                              
                    <input type="submit"  class="btn btn-default" style="background: #69bb85!important; border-color:#69bb85!important;" value="filtrar">
                    </div>
                </form>
                <!-- Fin de filtro -->
            
            <!--Filtro por Nombre--->
               
                <form action="/nombre"  method="GET"  style="display: inline-block;"  class="form-group  col-md-5" >
                <label style="margin-right: 0.2rem;">Nombre:  
                   <input type="text" class="form-control border border-secondary" style="display: inline-block; margin-right: 0.2rem;" placeholder="Nombre" name="nombre"> 
                   <input type="submit"  class="btn btn-default"  style="background: #69bb85!important; border-color:#69bb85!important;"value="filtrar"></label>
    </form>
    <!-- Fin de filtro -->
    </div>
                  </div>  
                  <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Usuarios Activos: {{$users->count() }}</div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-right p-3">
                        <table  class="table table-striped table-responsive" >

          <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Role</th>
              <th>Division</th>
              <th>Datos</th>
              <th>Actualizar Datos</th>
              <th>Eliminar Usuario</th>
             
            </tr>
                @foreach ($users as $key=>$data)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->cat_profesor}}</td>
                    <td>{{$data->division}}</td>
                   
                    <td><a class="btn btn-success" style="background: #69bb85!important; border-color:#69bb85!important;" href="{{ route('Administrador.show', $data->id) }}">Ver</a> </td>
                    <td><a class="btn btn-warning" style="background: #69bb85!important; border-color:#69bb85!important;" href="{{ route('Administrador.edit', $data->id) }}">Actualizar</a> </td>
                    <td>
                        <form action="{{route('Administrador.destroy', $data->id)}}"  method="POST"> 
                        @method("DELETE")
                        @csrf
                       <input type="submit" class="btn btn-danger" style="background: #69bb85!important; border-color:#69bb85!important;" value="Eliminar">
                       </form>
                    </td>
                    </tr>
                @endforeach
      </table>
@endsection
