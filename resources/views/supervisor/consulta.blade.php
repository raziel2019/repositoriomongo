@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')


<!-- El apartado de formulario para poder crear el documento de tutoria  -->
<div class="panel-header colorut" >
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-black pb-2 fw-bold">Informe</h2>
                </div>      
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">                  
        <!-- Contenido de Captura de expedientes-->
        <!-- Cuadros de menu -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Consulta de informe</div>
                    </div>
                <div class="card-body">
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

                            <form action="/fechaActual"  method="GET"  style="display: inline-block;"  class="form-group  col-md-5" >
                                <label style="margin-right: 0.2rem;">Año:  
                                <input type="number" class="form-control border border-secondary" style="display: inline-block; margin-right: 0.2rem;" placeholder="filtro por año" min="2017" max="2100" name="fechaActual"> 
                                <input type="submit"  class="btn btn-default"  style="display: inline-block;"value="filtrar"></label>
                            </form>
                        </div>
                    </div>  
                    <div class="table-wrapper table-responsive-lg">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-12">
                                <table id="dtHorizontalExample" class="table table-striped " >
                                    <tr>
                                        <th>#</th>
                                        <th>Autor(es)</th>
                                        <th>Proyecto</th>
                                        <th>Institución</th>
                                        <th>Año</th>
                                        <th>Estado Actual</th>
                                        <th>Páginas</th>
                                        <th>País</th>
                                        <th>Area</th>
                                        <th>Informe</th>
                                        <th></th>
                                        {{-- <th>#</th>
                                        <th>Autor(es)</th>
                                        <th>Proyecto</th>
                                        <th>Alcance</th>
                                        <th>Institución</th>
                                        <th>Año</th>
                                        <th>Estado Actual</th>
                                        <th>Páginas</th>
                                        <th>País</th>
                                        <th>Proposito</th>
                                        <th>Miembros</th>
                                        <th>LGACs</th>
                                        <th>PCC</th>
                                        <th>Año y fecha</th>
                                        <th>Area</th>
                                        <th>Informe</th> --}}
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin de apartado de formulario -->
@endsection
