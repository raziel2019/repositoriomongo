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
                        <div class="card-title">Actualizacion Tutoria Grupal</div>
                    </div>
                <div class="card-body">
                <form action="{{ route('tutoriaG.update',$data->id) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Numero de estudiantes</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="Escribir Nombre" name="estudiantes" required value={{$data->estudiantes}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Nivel</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="nivel" required value={{$data->nivel}}>
                                        <option value="Tecnico Superior Universitario">Tecnico Superior Universitario</option>
                                        <option value="Ingenieria">Ingenieria</option>      
                                    </select>
                                </div> 
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Programa educativo en el que participa</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Programa educativo" name="programa" required value={{$data->programa}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Fecha de inicio</label>
                                    <input type="date" class="form-control border border-secondary" id="inputDate" name="fechaIni" required value={{$data->fechaIni}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Fecha de termino</label>
                                    <input type="date" class="form-control border border-secondary" id="inputDate" name="fechaFin" required value={{$data->fechaFin}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Actividad de Tutoria</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Tipo de tutelaje" name="tipo" required value={{$data->tipo}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Estado del tutelaje</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Estado del tutelaje" name="estado" required value={{$data->estado}}>
                                </div>
                            </div>
                            <div class="form-row">
                                <br>
                                <button type="submit" class="btn btn-primary">Actualizar Archivo</button>
                            </div>
                        </form>                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin de apartado de formulario -->
@endsection
