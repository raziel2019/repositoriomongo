@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')


<!-- El apartado de formulario para poder crear el documento de tutoria  -->
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
	    <!-- Contenido de Captura de expedientes-->
	    <!-- Cuadros de menu -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Actualizar curso</div>
                    </div>
                <div class="card-body">
                <form action="{{ route('curso.update',$data->id) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Nombre del curso</label>
                                    <input type="text" class="form-control border border-secondary" id="inputEmail4" placeholder="Nombre del curso" name="nombre" required value={{$data->nombre}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Institucion de Educacion Superior (IES)</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Institucion de Educacion Superior (IES)" name="institucion" required value={{$data->institucion}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Programa educativo</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Programa educativo" name="programa" required value={{$data->programa}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Cuatrimestre</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Cuatrimeste" name="cuatrimestre" required value={{$data->cuatrimestre}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Grupo</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Grupo" name="grupo" required value={{$data->grupo}}>
                                </div>  
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Nivel</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="nivel" required value={{$data->nivel}}>
                                        <option value="Tecnico Superior Universitario">Tecnico Superior Universitario</option>
                                        <option value="Ingenieria">Ingenieria</option>      
                                    </select>
                                </div> 
                                <div class="form-group col-md-3">
                                    <label for="inputCity">Fecha de inicio</label>
                                    <input type="date" class="form-control border border-secondary" id="inputDate" name="fechaIni" required value={{$data->fechaIni}}>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Numero de alumnos</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="Numero de alumnos" name="alumnos" required value={{$data->alumnos}}>
                                </div> 
                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Duracion en semanas</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="Duracion en semanas" name="duracion" required value={{$data->duracion}}>
                                </div> 
                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Horas de asesoria al mes</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="Horas al mes" name="hMes" required value={{$data->hMes}}>
                                </div> 
                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Horas semanales dedicadas a este curso</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="Horas del curso" name="hSemana" required value={{$data->hSemana}}>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="file" class="custom-file-input" name="file" required id="validatedCustomFile" >
                                    <label class="custom-file-label " for="validatedCustomFile">Subir Archivo...</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <br>
                                <button type="submit" class="btn btn-primary">Subir Archivo</button>
                            </div>
                        </form>                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin de apartado de formulario -->
@endsection
