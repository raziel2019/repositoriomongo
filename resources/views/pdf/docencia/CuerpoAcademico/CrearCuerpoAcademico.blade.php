@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')

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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Crear Cuerpo Academico</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cuerpoAcademico.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Nombre del cuerpo academico</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Nombre del cuerpo academico" name="nombre" required>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Clave</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Clave" name="clave" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Grado de consolidacion</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="grado" required>
                                        <option value="En formacion">En formacion</option>
                                        <option value="En consolidacion">En consolidacion</option>
                                        <option value="Consolidado">Consolidado</option>      
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
	                                <label for="inputPassword4">Periodo</label>
	                                <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="cuatrimestre" required>
                                  <option value="Enero-Abril">Enero-Abril</option>
                                  <option value="Mayo-Agosto">Mayo-Agosto</option>     
                                  <option value="Septiembre-Diciembre">Septiembre-Diciembre</option>     
                                  <option value="N/A">N/A</option>  
                                	</select>
	                            </div>
                                
                            <div class="form-group col-md-8">
                                <label for="inputState">Captura de evidencia</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required>
                                    <label class="custom-file-label  border border-secondary" for="validatedCustomFile">Archivo..</label>
                                </div>
                                
                            </div>
                                <div class="form-group col-md-12">
                                    <label for="comment">Linea(s) que cultiva el cuerpo academico</label>
                                    <textarea class="form-control border border-secondary" id="comment" rows="5" placeholder="Linea(s) que cultiva el cuerpo academico" name="lineas" required>

                                    </textarea>
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

@endsection