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
                        <div class="card-title">Crear Curso</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('curso.store') }}" method="post"  enctype="multipart/form-data">
                        @csrf
                            <div class="form-row">
                                 <div class="form-group col-md-4">
                                    <label for="inputEmail4">Nombre del curso</label>
                                    <input type="text" class="form-control border border-secondary" id="inputEmail4" placeholder="Nombre del curso" name="nombre" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Institucion de Educacion Superior (IES)</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Institucion de Educacion Superior (IES)" name="institucion" required>
                                </div>
                                <div class="form-group col-md-4">
	                                <label for="inputPassword4">Periodo</label>
	                                <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="periodo" required>
                                  <option value="Enero-Abril">Enero-Abril</option>
                                  <option value="Mayo-Agosto">Mayo-Agosto</option>     
                                  <option value="Septiembre-Diciembre">Septiembre-Diciembre</option>     
                                  <option value="N/A">N/A</option>  
                                	</select>
	                            </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Programa educativo</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Programa educativo" name="programa" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Cuatrimestre</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Cuatrimeste" name="cuatrimestre" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Grupo</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Grupo" name="grupo" required>
                                </div>  
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Nivel</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="nivel" required>
                                        <option value="Tecnico Superior Universitario">Tecnico Superior Universitario</option>
                                        <option value="Ingenieria">Ingenieria</option>      
                                    </select>
                                </div> 
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Fecha de inicio</label>
                                    <input type="date" class="form-control border border-secondary" id="inputDate" name="fechaIni" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Numero de alumnos</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="Numero de alumnos" name="alumnos" required>
                                </div> 
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Duracion en semanas</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="Duracion en semanas" name="duracion" required>
                                </div> 
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Horas de asesoria al mes</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="Horas al mes" name="hMes" required>
                                </div> 
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Horas semanales dedicadas a este curso</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="Horas del curso" name="hSemana" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Captura de evidencia</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required>
                                    <label class="custom-file-label  border border-secondary" for="validatedCustomFile">Archivo..</label>
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