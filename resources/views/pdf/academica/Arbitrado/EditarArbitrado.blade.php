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
                        <div class="card-title">Artículo arbitrado   </div>
                    </div>
                <div class="card-body">
                <form action="{{ route('arbitrado.update',$data->id) }}" method="post" accept-charset="utf-8">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="inputEmail4">Autor(es) </label>
                                <input type="text" class="form-control border border-secondary" name="autor" required value={{$data->autor }}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Título  </label>
                                <input type="text" class="form-control border border-secondary"  name="titulo" required value={{$data->titulo }}>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Estado actual</label>
                                <input type="text" class="form-control border border-secondary" name="estado" required value={{$data->estado}}>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">País </label>
                                <input type="text" class="form-control border border-secondary" name="pais" required value={{$data->pais}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nombre de la Revista</label>
                                <input type="text" class="form-control border border-secondary" name="nombre" required value={{$data->nombre }}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Editorial </label>
                                <input type="text" class="form-control border border-secondary" name="editorial" required value={{$data->editorial }}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Volumen</label>
                                <input type="text" class="form-control border border-secondary" name="volumen" required value={{$data->volumen}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">ISSN</label>
                                <input type="text" class="form-control border border-secondary" name="issn" required value={{$data->issn}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Propósito </label>
                                <input type="text" class="form-control border border-secondary"  name="proposito" required value={{$data->proposito}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Miembros </label>
                                <input type="text" class="form-control border border-secondary"  name="miembros" required value={{$data->miembros}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">LGACs </label>
                                <input type="text" class="form-control border border-secondary" name="lgacs" required value={{$data->lgacs}}>
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Para considerar en el currículum de cuerpo académico </label>
                                <select class="custom-select form-control border border-secondary" id="inputGroupSelect01"  required name="cv" value={{$data->cv }}>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                    </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Año y fecha </label>
                                <input type="date" class="form-control border border-secondary" name="date" required value={{$data->date }}>
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
