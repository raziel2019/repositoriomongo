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
                        <div class="card-title">Informe técnico   </div>
                    </div>
                <div class="card-body">
                <form action="{{ route('informe.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="inputEmail4">Autor(es) </label>
                                <input type="text" class="form-control border border-secondary" name="autor" required placeholder="Nombre del Autor">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nombre del estudio o proyecto realizado </label>
                                <input type="text" class="form-control border border-secondary" name="nombre" required placeholder="Nombre del Estudio">
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
                                <label for="inputPassword4">Alcance </label>
                                <input type="text" class="form-control border border-secondary" name="alcance" required placeholder="Escribir Alcance o objetivo">
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Institución beneficiaria </label>
                                <input type="text" class="form-control border border-secondary"  name="institucion" required placeholder="Escribir Empresa o Dependencia">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Año </label>
                                <input type="text" class="form-control border border-secondary"  name="año" required placeholder="Escribir Año">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Estado Actual </label>
                                <input type="text" class="form-control border border-secondary"  name="estado" required placeholder="Escribir EEstado Actual">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Páginas</label>
                                <input type="text" class="form-control border border-secondary"  name="paginas" required placeholder="Escribir las paginas">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">País</label>
                                <input type="text" class="form-control border border-secondary" name="pais" required placeholder="Escribir Pais">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Proposito </label>
                                <input type="text" class="form-control border border-secondary" name="proposito" required placeholder="Escribir el proposito">
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Miembros </label>
                                <input type="text" class="form-control border border-secondary" name="miembros" required placeholder="Escribir a los miembros">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">LGACs </label>
                                <input type="text" class="form-control border border-secondary"  name="lgacs"  required placeholder="Escribir ">
                            </div>
                            <div class="form-group col-md-12">
                            <label for="inputPassword4">Para considerar en el currículum de cuerpo académico </label>
                                <select class="custom-select form-control border border-secondary" id="inputGroupSelect01" required name="curriculum_de_cuerpo_academico">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                    </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Año y fecha </label>
                                <input type="date" class="form-control border border-secondary" required name="date" >
                            </div>             
                            <div class="form-group col-md-6">
                                <label for="inputState">Captura de evidencia</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" required id="validatedCustomFile" >
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
