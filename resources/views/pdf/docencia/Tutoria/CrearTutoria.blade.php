@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')

    <div class="panel-header colorut" >
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-black pb-2 fw-bold">Tutoría</h2>
                </div>      
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tutoria individual</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tutoria.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Nivel</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="nivel" required>
                                        <option value="Tecnico Superior Universitario">Tecnico Superior Universitario</option>
                                        <option value="Ingenieria">Ingenieria</option>      
                                    </select>
                                </div> 
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Programa educativo en el que participa</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Programa educativo" name="programa" required>
                                </div>
                                <div class="form-group col-md-4">
	                                <label for="inputPassword4">Periodo</label>
	                                <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="cuatrimestre" required>
                                  <option value="Enero-Abril">Enero-Abril</option>
                                  <option value="Mayo-Agosto">Mayo-Agosto</option>     
                                  <option value="Septiembre-Diciembre">Septiembre-Diciembre</option>     
                                  <option value="N/A">N/A</option>  
                                	</select>
	                            </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Fecha de inicio</label>
                                    <input type="date" class="form-control border border-secondary" id="inputDate" name="fechaIni" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Fecha de termino</label>
                                    <input type="date" class="form-control border border-secondary" id="inputDate" name="fechaFin" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Actividad de Tutoria</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Actividad de Tutoria" name="tipo" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Estado del tutelaje</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Estado del tutelaje" name="estado" required>
                                </div>
                                <div class="form-group col-md-8">
                                <label for="inputState">Captura de evidencia</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required>
                                    <label class="custom-file-label  border border-secondary" for="validatedCustomFile">Archivo..</label>
                                </div>
                            </div>           
                            <div class="form-row">
                                <br>
                                <button type="submit" class="btn btn-primary" style="background: #69bb85!important; border-color:#69bb85!important;">Generar Archivo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection