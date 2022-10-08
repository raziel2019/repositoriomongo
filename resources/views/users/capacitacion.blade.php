@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')
<!--  Este del formulario inicio de  gestion academida -->
<div class="panel-header colorut" >
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			    <div>
			        <h2 class="text-black pb-2 fw-bold">Captura de Expedientes</h2>
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
                        <div class="card-title">Captura de Capacitacion</div>
                    </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            
                            <br>
                            <button type="submit" class="btn btn-primary">Generar Archivo</button>
                        </form>                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin de formulario de gestion academida -->
@endsection
