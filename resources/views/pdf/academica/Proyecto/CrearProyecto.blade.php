@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')


<!-- El apartado de formulario para poder crear el documento de tutoria  -->
<div class="panel-header colorut" >
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			    <div>
			        <h2 class="text-black pb-2 fw-bold">Producción Académica</h2>
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
                        <div class="card-title">Proyecto de investigación </div>
                    </div>
                <div class="card-body">
                <form action="{{ route('proyecto.store') }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="inputEmail4">Título del proyecto </label>
                                <input type="text" class="form-control border border-secondary" name="titulo" placeholder="Escribir Titulo" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nombre del patrocinador </label>
                                <input type="text" class="form-control border border-secondary" name="nombre"  placeholder="Escribir Nombre del patrocinador" required>
                            </div> 
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Tipo de patrocinador </label>
                                <select class="custom-select form-control border border-secondary " id="inputGroupSelect01"  name="tipo" required>
                                    <option value="Interno">Interno</option>
                                    <option value="Externo">Externo</option>
                                    </select>
                        </div>
                        <div class="form-group col-md-6">
	                                <label for="inputPassword4">Periodo</label>
	                                <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="cuatrimestre" required>
                                  <option value="Enero-Abril">Enero-Abril</option>
                                  <option value="Mayo-Agosto">Mayo-Agosto</option>     
                                  <option value="Septiembre-Diciembre">Septiembre-Diciembre</option>     
                                  <option value="N/A">N/A</option>  
                                	</select>
	                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Para considerar en el currículum de cuerpo académico </label>
                                <select class="custom-select form-control border border-secondary" id="inputGroupSelect01"  name="curriculum_de_cuerpo_academico" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                    </select>
                        </div>
                        <div class="form-group col-md-6">
                                <label for="inputPassword4">Investigadores participantes </label>
                                <input type="text" class="form-control border border-secondary" name="investigadores" placeholder="Escribir otros investigadores" required>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Alumnos participantes </label>
                                <input type="text" class="form-control border border-secondary" name="alumnos" placeholder="Escribir alumnos participantes" required>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Actividades realizadas </label>
                                <input type="text" class="form-control border border-secondary" name="actividades" placeholder="Escribir Actividades Realizadas" required>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Miembros </label>
                                <input type="text" class="form-control border border-secondary" name="miembros" placeholder="Escribir a los miembros" required>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">LGACs </label>
                                <input type="text" class="form-control border border-secondary" name="lgacs" placeholder="Escribir " required>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputCity">Fecha de inicio </label>
                                <input type="date" class="form-control border border-secondary" name="fecha" required> 
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Fecha de termino </label>
                                <input type="date" class="form-control border border-secondary" name="fecha_termino" required >
                            </div>
                           
                            <div class="form-group col-md-6">
                                <label for="inputState">Captura de evidencia</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required>
                                    <label class="custom-file-label  border border-secondary" for="validatedCustomFile">Archivo..</label>
                                </div>
                            </div>            
                            <br>
                            <button type="submit" class="btn btn-primary" style="background: #69bb85!important; border-color:#69bb85!important;">Subir Archivo</button>
                        </form>                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin de apartado de formulario -->
@endsection
