@extends('layouts.app')

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
   <br>
        <br>

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
                        <div class="card-title">Documentos Asesorias: {{$file->count() }}</div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-right p-3">
                        <table  class="table table-striped table-responsive" >
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Alcance</th>
                                <th>Periodo</th>
                                </tr>
                                @foreach ($file as $key=>$data)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$data->nombre}}</td>
                                    <td>{{$data->alcance}}</td>
                                    <td>{{$data->cuatrimestre}}</td>     
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Documentos Gestion Academica: {{$gestion->count() }} </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-right p-3">
                        <table  class="table table-striped table-responsive" >

<tr>
    <th>#</th>
    <th>Titulo</th>
    <th>Programa educativo</th>
    <th>Tipo de gestion</th>
    <th>Periodo</th>
    <th>Fecha de Creacion</th>
    <th>Estado de la direccion individualizada</th>
    </tr>
      @foreach ($gestion as $key=>$data)
      <tr>
          <td>{{++$key}}</td>
          <td>{{$data->nombre}}</td>
          <td>{{$data->programa}}</td>
          <td>{{$data->gestion}}</td>
          <td>{{$data->cuatrimestre}}</td>
          <td>{{$data->created_at}}</td>
          <td>{{$data->estado}}</td>
    
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


<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
