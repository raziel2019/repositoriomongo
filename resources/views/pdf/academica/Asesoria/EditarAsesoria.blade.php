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
                        <div class="card-title">Actualizacion del Artículo de Asesoría </div>
                    </div>
                <div class="card-body">
                <form action="{{ route('asesoria.update', $data->id) }}"  method="post" accept-charset="utf-8">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="inputEmail4">Nombre del estudio o proyecto realizado </label>
                                <input type="text" class="form-control border border-secondary" name="nombre" required value={{ $data->nombre }}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Alcance o Objetivo </label>
                                <input type="text" class="form-control border border-secondary" name="alcance" required value={{ $data->alcance}}>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Empresa o Dependencia Beneficiaria </label>
                                <input type="text" class="form-control border border-secondary" name="empresa" required value={{ $data->empresa}}>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">País </label>
                                <input type="text" class="form-control border border-secondary" name="pais" required value={{ $data->pais}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Estado actual </label>
                                <input type="text" class="form-control border border-secondary" name="estado" required value={{ $data->estado}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Otros investigadores participantes</label>
                                <input type="text" class="form-control border border-secondary" name="investigadores" required value={{ $data->investigadores}}>
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Para considerar en el currículum de cuerpo académico </label>
                                <select class="custom-select form-control border border-secondary" id="inputGroupSelect01"  name="curriculum_de_cuerpo_academico" required value={{ $data->curriculum_de_cuerpo_academico}}>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                    </select>
                        </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Miembros </label>
                                <input type="text" class="form-control border border-secondary" name="miembros" required value={{ $data->miembros}}>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">LGACs </label>
                                <input type="text" class="form-control border border-secondary" name="lgacs" required value={{ $data->lgacs}}>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Año y fecha </label>
                                <input type="date" class="form-control border border-secondary" name="fecha" required value={{ $data->fecha}} >
                            </div>                                                   
                            <br>
                            <button type="submit" class="btn btn-primary">Actualizar Archivo</button>
                        </form>                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin de apartado de formulario -->
@endsection
