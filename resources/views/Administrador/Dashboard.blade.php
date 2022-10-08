@extends('layouts.admin')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')
   
<div class="panel-header" style="background: #69bb85;">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                    <h5 class="text-white op-7 mb-2">Sistema Repositorio de Producción Académica</h5>
                </div>
              
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
    
    <!-- Contenido del Dashboard -->
        
 <!-- Tabla Documentos -->
 <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                    
                        <div class="card-title">Documentos Material Didactico: {{$material->count()}} </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-right p-3">
                        <table  class="table table-striped table-responsive" >
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Autor</th>
                                <th>Periodo</th>
                                </tr>
                                @foreach ($material as $key=>$data)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$data->titulo}}</td>
                                    <td>{{$data->autor}}</td>
                                    <td>{{$data->cuatrimestre}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    
 <!-- Tabla Perfiles Activos -->
            <div class="col-md-6">
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
                                </tr>
                                @foreach ($users as $key=>$data)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->cat_profesor}}</td>
                                    <td>{{$data->division}}</td>                 
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

