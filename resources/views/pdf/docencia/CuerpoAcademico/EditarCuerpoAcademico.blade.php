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
                        <div class="card-title">Actualizar Direccion Individualizada</div>
                    </div>
                <div class="card-body">
                <form action="{{ route('cuerpoAcademico.update',$data->id) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Nombre del cuerpo academico</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Nombre del cuerpo academico" name="nombre" required value={{$data->nombre}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Clave</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Clave" name="clave" required value={{$data->clave}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Grado de consolidacion</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="grado" required value={{$data->grado}}>
                                        <option value="En formacion">En formacion</option>
                                        <option value="En consolidacion">En consolidacion</option>
                                        <option value="Consolidado">Consolidado</option>      
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="comment">Linea(s) que cultiva el cuerpo academico</label>
                                    <textarea class="form-control border border-secondary" id="comment" rows="5" name="lineas" required value={{$data->lineas}}>

                                    </textarea>
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
