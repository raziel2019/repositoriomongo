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
                        <div class="card-title">Actualizar Gestion Academica</div>
                    </div>
                <div class="card-body">
                <form action="{{ route('estadia.update',$data->id) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Nombre de la estadia</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Nombre de la estadia" name="nombre" required value={{$data->nombre}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Programa educativo</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="programa" required value={{$data->programa}}>
                                        <option value="Tecnico Superior Universitario">Ingenieria en Tecnologias de la Informacion y Comunicacion</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Grado</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="0" name="grado"  required value={{$data->grado}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Nombre de la empresa o institucion</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Nombre de la empresa o institucion" name="empresa" required value={{$data->empresa}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Puntos criticos a resolver</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Puntos criticos a resolver" name="puntos" required value={{$data->puntos}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Resultados obtenidos o esperados</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Resultados obtenidos o esperados" name="resultados" required value={{$data->resultados}}>
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
                                    <label for="inputPassword4">Numero de alumnos</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="0" name="alumnos" required value={{$data->alumnos}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Numero de horas</label>
                                    <input type="number" class="form-control border border-secondary" id="inputPassword4" placeholder="0" name="horas" required value={{$data->horas}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Estado de la direccion individualizada</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="estado" required value={{$data->estado}}>
                                        <option value="En proceso">En proceso</option>
                                        <option value="Concluida">Concluida</option>      
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Para considerar en curriculum de cuerpo academico</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="considerar" required value={{$data->considerar}}>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>      
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Miembros</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Miembros" name="miembros" required value={{$data->miembros}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">LGACs</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="LGACs" name="lgacs" required value={{$data->lgacs}}>
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
