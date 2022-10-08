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
                <form action="{{ route('proyecto.update',$data->id) }}" method="post" accept-charset="utf-8">
                @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="inputEmail4">Título del proyecto </label>
                                <input type="text" class="form-control border border-secondary" required name="titulo" value={{$data->titulo }}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nombre del patrocinador </label>
                                <input type="text" class="form-control border border-secondary" required name="nombre"  value={{$data->nombre }}>
                            </div> 
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Tipo de patrocinador </label>
                                <select class="custom-select form-control border border-secondary " required id="inputGroupSelect01"  name="tipo" value={{$data->tipo }}>
                                    <option value="Interno">Interno</option>
                                    <option value="Externo">Externo</option>
                                    </select>
                        </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Para considerar en el currículum de cuerpo académico </label>
                                <select class="custom-select form-control border border-secondary" id="inputGroupSelect01"  name="curriculum_de_cuerpo_academico" required value={{$data->curriculum_de_cuerpo_academico }}>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                    </select>
                        </div>
                        <div class="form-group col-md-6">
                                <label for="inputPassword4">Investigadores participantes </label>
                                <input type="text" class="form-control border border-secondary" name="investigadores" required value={{$data->investigadores }}>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Alumnos participantes </label>
                                <input type="text" class="form-control border border-secondary" name="alumnos" required value={{$data->alumnos}}>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Actividades realizadas </label>
                                <input type="text" class="form-control border border-secondary" name="actividades" required value={{$data->actividades}}>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Miembros </label>
                                <input type="text" class="form-control border border-secondary" name="miembros" required value={{$data->miembros}}>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">LGACs </label>
                                <input type="text" class="form-control border border-secondary" name="lgacs" required value={{$data->lgacs }}>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputCity">Fecha de inicio </label>
                                <input type="date" class="form-control border border-secondary" name="fecha" required value={{$data->fecha }} > 
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Fecha de termino </label>
                                <input type="date" class="form-control border border-secondary" name="fecha_termino" required value={{$data->fecha_termino}}>
                            </div>
                           
                         
                            <br>
                            <button type="submit" class="btn btn-primary">Subir Archivo</button>
                        </form>                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin de apartado de formulario -->
@endsection
