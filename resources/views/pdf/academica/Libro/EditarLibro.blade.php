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
                        <div class="card-title">Actualizacion de Libro  </div>
                    </div>
                <div class="card-body">
                <form action="{{ route('libro.update',$data->id) }}" method="post" accept-charset="utf-8">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="inputEmail4">Autor(es) </label>
                                <input type="text" class="form-control border border-secondary" name="autor" required value={{$data->autor }}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Título del Libro </label>
                                <input type="text" class="form-control border border-secondary" name="titulo" required value={{$data->titulo }}>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Estado actual </label>
                                <input type="text" class="form-control border border-secondary" name="estado" required value={{$data->estado}}>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">País </label>
                                <input type="text" class="form-control border border-secondary" name="pais" required value={{$data->pais}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Editorial </label>
                                <input type="text" class="form-control border border-secondary" name="editorial" required value={{$data->editorial }}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Edición</label>
                                <input type="text" class="form-control border border-secondary" name="edicion" required value={{$data->edicion}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Tiraje </label>
                                <input type="text" class="form-control border border-secondary" name="tiraje" required value={{$data->tiraje}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">ISBN </label>
                                <input type="text" class="form-control border border-secondary" name="isbn" required value={{$data->isbn }}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Propósito  </label>
                                <input type="text" class="form-control border border-secondary" name="proposito" required value={{$data->proposito }}>
                            </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Año y fecha </label>
                                <input type="date" class="form-control border border-secondary" name="date" required value={{$data->date }} >
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Generar Archivo</button>
                        </form>                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin de apartado de formulario -->
@endsection
