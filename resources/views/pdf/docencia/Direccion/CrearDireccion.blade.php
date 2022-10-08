@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')

    <div class="panel-header colorut" >
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-black pb-2 fw-bold">Docencia</h2>
                </div>      
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Direccion Individualizada</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('direccion.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                            <div class="form-row">
                                 <div class="form-group col-md-4">
                                    <label for="inputPassword4">Titulo de la tesis o proyecto individual</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Titulo de la tesis o proyecto individual" name="titulo" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Fecha de inicio</label>
                                    <input type="date" class="form-control border border-secondary" id="inputDate" name="fechaIni" required>
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
                                    <label for="inputPassword4">Grado</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="grado" required>
                                        <option value="Tecnico Superior Universitario">Tecnico Superior Universitario</option>
                                        <option value="Ingenieria">Ingenieria</option>      
                                    </select>
                                </div> 
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Fecha de termino</label>
                                    <input type="date" class="form-control border border-secondary" id="inputDate" name="fechaFin" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Numero de alumnos</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="0" name="alumnos" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Estado de la direccion individualizada</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="estado" required>
                                        <option value="En proceso">En proceso</option>
                                        <option value="Concluida">Concluida</option>      
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Para considerar en curriculum de cuerpo academico</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="considerar" required>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>      
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Miembros</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Miembros" name="miembros" required>
                                </div>
                                <div class="form-group col-md-4">
                                <label for="inputState">Captura de evidencia</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required>
                                    <label class="custom-file-label  border border-secondary" for="validatedCustomFile">Archivo..</label>
                                </div>
                            </div>        
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">LGACs</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="LGACs" name="lgacs" required>
                                </div>
                            </div>
                             
                            <div class="form-row">
                                <br>
                                <button type="submit" class="btn btn-primary" style="background: #69bb85!important; border-color:#69bb85!important;">Subir Archivo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection