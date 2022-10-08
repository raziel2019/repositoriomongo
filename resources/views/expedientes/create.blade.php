<style>
    .colorut{    
   background:#1ab394 !important;
   border-color: #1ab394 !important;
   cursor: pointer;
   margin-right: auto;
    margin-left: auto;
    margin-top: 1rem;
   color: #fff;
    }
   @media only screen and (max-width: 600px) {
   .colorut{    
   background:#1ab394 !important;
   border-color: #1ab394 !important;
   cursor: pointer;
   width: 100%;
   color: #fff;
   }
   }
</style>
@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')
    <div class="panel-header "  style="background: #69bb85;" >
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			    <div>
			        <h2 class="text-white pb-2 fw-bold">Captura de Expedientes</h2>
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
                        <div class="card-title">Crear Nuevo Expediente</div>
                    </div>
                <div class="card-body">
                    <form action="{{ url('pdf_download') }}" method="post" accept-charset="utf-8">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="inputEmail4">Titulo del Expediente</label>
                                <input type="text" class="form-control border border-secondary" id="Titulo" name="Titulo" placeholder="Titulo">
                                <span class="text-danger">{{ $errors->first('Titulo') }}</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Asunto</label>
                                <input type="text" class="form-control border border-secondary" id="Asunto" name="Asunto" placeholder="Asunto">
                                <span class="text-danger">{{ $errors->first('Asunto') }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Descripción</label>
                                <textarea class="form-control border border-secondary" style="resize: none;" name="Descripcion" id="Descripcion"></textarea>
                                <span class="text-danger">{{ $errors->first('Descripcion') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Docente</label>
                            <input type="text" class="form-control border border-secondary"  id="Docente" name="Docente" placeholder="Nombre del docente">
                            <span class="text-danger">{{ $errors->first('Docente') }}</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Fecha</label>
                                <input type="date" class="form-control border border-secondary" id="Date" name="Date" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Area de Entrega</label>
                                <select id="inputState" class="form-control border border-secondary" name="Area" id="Area">
                                    <option selected>Divsion de ingenieria</option>
                                    <option>Turismo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputState">Subir Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" >
                                    <label class="custom-file-label  border border-secondary" for="validatedCustomFile">Elige Imagen...</label>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn colorut">Generar Expediente</button>
                        </form>                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection