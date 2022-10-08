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
                        <div class="card-title">Crear Capacitacion</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('capDiplomado.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Tipo</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="tipo" required>
                                        <option value="Diplomado">Diplomado</option>
                                    </select>
                                </div> 
                                 <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nombre</label>
                                    <input type="text" class="form-control border border-secondary" id="inputEmail4" placeholder="Nombre" name="nombre" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="comment">Descripcion</label>
                                    <textarea class="form-control border border-secondary" id="comment" rows="5" placeholder="Descripcion" name="descripcion" required>

                                    </textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Duracion</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Duracion" name="duracion" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Lugar</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Lugar" name="lugar" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="comment">Contenido</label>
                                    <textarea class="form-control border border-secondary" id="comment" rows="5" placeholder="Contenido" name="contenido" required>

                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Captura de evidencia</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required>
                                    <label class="custom-file-label  border border-secondary" for="validatedCustomFile">Archivo..</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <br>
                                <button type="submit" class="btn btn-primary" style="background: #69bb85!important; border-color:#69bb85!important;">Subir Archivo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection