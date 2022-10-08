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
                        <div class="card-title">Actualizar Capacitacion Taller/Curso</div>
                    </div>
                <div class="card-body">
                <form action="{{ route('capacitacion.update',$data->id) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Tipo</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="tipo" required value={{$data->tipo}}>
                                        <option value="Taller">Taller</option>
                                        <option value="Curso">Curso</option>      
                                    </select>
                                </div> 
                                 <div class="form-group col-md-4">
                                    <label for="inputEmail4">Nombre</label>
                                    <input type="text" class="form-control border border-secondary" id="inputEmail4" placeholder="Nombre" name="nombre" required value={{$data->nombre}}>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="comment">Descripcion</label>
                                    <textarea class="form-control border border-secondary" id="comment" rows="5" placeholder="Descripcion" name="descripcion" required value={{$data->descripcion}}>

                                    </textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Duracion</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Duracion" name="duracion" required value={{$data->duracion}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Lugar</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Lugar" name="lugar" required value={{$data->lugar}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Fecha</label>
                                    <input type="date" class="form-control border border-secondary" id="inputDate" name="fecha" required value={{$data->fecha}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Instructor</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Nombre del instructor" name="instructor" required value={{$data->instructor}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Grupo</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Grupo" name="grupo" required value={{$data->grupo}}>
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
