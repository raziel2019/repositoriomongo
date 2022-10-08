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
                        <div class="card-title">Artículo en revista</div>
                    </div>
                <div class="card-body">
                <form action="{{ route('revista.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="inputEmail4">Autor(es) </label>
                                <input type="text" class="form-control border border-secondary" name="autor" placeholder="Nombre del Autor" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Título </label>
                                <input type="text" class="form-control border border-secondary" name="titulo" placeholder="Escribir Titulo" required>
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
                                <label for="inputPassword4">Descripción </label>
                                <input type="text" class="form-control border border-secondary" name="descripcion" placeholder="Escribir Descripcion" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Estado actual  </label>
                                <input type="text" class="form-control border border-secondary" name="estado" placeholder="Escribir Estado" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">País  </label>
                                <input type="text" class="form-control border border-secondary" name="pais" placeholder="Escribir Pais" required>
                            </div>  
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nombre de la Revista</label>
                                <input type="text" class="form-control border border-secondary" name="nombre" placeholder="Escribir Nombre" required>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Editorial  </label>
                                <input type="text" class="form-control border border-secondary"  name="editorial" placeholder="Escribir Nombre de la editorial" required>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">De la página (Numero de pagina)</label>
                                <input type="text" class="form-control border border-secondary"  name="pagina" placeholder="Escribir numero de la pagina inicial" required>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">A la página (Numero de pagina)  </label>
                                <input type="text" class="form-control border border-secondary" name="pagina2" placeholder="Escribir numero de la pagina de termino" required>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Volumen </label>
                                <input type="text" class="form-control border border-secondary" name="volumen" placeholder="Escribir Volumen" required>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Índice de registro de la revista </label>
                                <input type="text" class="form-control border border-secondary" name="indice" placeholder="Escribir indice" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">ISSN </label>
                                <input type="text" class="form-control border border-secondary" name="issn" placeholder="Escribir ISSN" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Dirección electrónica del artículo </label>
                                <input type="text" class="form-control border border-secondary" name="direccion" placeholder="Escribir Direccion" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Propósito  </label>
                                <input type="text" class="form-control border border-secondary" name="proposito" placeholder="Escribir Proposito" required>
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
                            <label for="inputPassword4">Para considerar en el currículum de cuerpo académico </label>
                                <select class="custom-select form-control border border-secondary " id="inputGroupSelect01"  name="curriculum_de_cuerpo_academico" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                    </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Año y fecha </label>
                                <input type="date" class="form-control border border-secondary" name="date" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Captura de evidencia</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required >
                                    <label class="custom-file-label  border border-secondary" for="validatedCustomFile">Archivo..</label>
                                </div>
                            </div>    
                            <br>
                            <button type="submit" class="btn btn-primary" style="background: #69bb85!important; border-color:#69bb85!important;">Generar Archivo</button>
                        </form>                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin de apartado de formulario -->
@endsection
