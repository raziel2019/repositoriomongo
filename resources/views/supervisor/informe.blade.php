@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')


<!-- El apartado de formulario para poder crear el documento de tutoria  -->
<div class="panel-header colorut" >
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			    <div>
			        <h2 class="text-black pb-2 fw-bold">Informe</h2>
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
                        <div class="card-title">Creacion de informe</div>
                    </div>
                <div class="card-body">
                <form action="{{ url('') }}" method="post" accept-charset="utf-8">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="inputEmail4">Autor(es) </label>
                                <input type="text" class="form-control border border-secondary" name="autor" placeholder="Nombre del Autor">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nombre del estudio o proyecto realizado </label>
                                <input type="text" class="form-control border border-secondary" name="nombre" placeholder="Nombre del Estudio">
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Alcance </label>
                                <input type="text" class="form-control border border-secondary" name="alcance" placeholder="Escribir Alcance o objetivo">
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Institución beneficiaria </label>
                                <input type="text" class="form-control border border-secondary"  name="empresa" placeholder="Escribir Empresa o Dependencia">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Año </label>
                                <input type="text" class="form-control border border-secondary"  name="año" placeholder="Escribir Año">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Estado Actual </label>
                                <input type="text" class="form-control border border-secondary"  name="estado" placeholder="Escribir EEstado Actual">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Páginas</label>
                                <input type="text" class="form-control border border-secondary"  name="paginas" placeholder="Escribir las paginas">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">País</label>
                                <input type="text" class="form-control border border-secondary" name="pais" placeholder="Escribir Pais">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Proposito </label>
                                <input type="text" class="form-control border border-secondary" name="proposito" placeholder="Escribir el proposito">
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Miembros </label>
                                <input type="text" class="form-control border border-secondary" name="miembros" placeholder="Escribir a los miembros">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">LGACs </label>
                                <input type="text" class="form-control border border-secondary"  name="lgacs" placeholder="Escribir ">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Para considerar en el currículum de cuerpo académico </label>
                                <select class="custom-select form-control border border-secondary" id="inputGroupSelect01"  name="cv">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Año y fecha </label>
                                <input type="date" class="form-control border border-secondary" name="date" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Area de Entrega</label>
                                <select id="inputState" class="form-control border border-secondary" name="area">
                                    <option selected>Divsion de ingenieria</option>
                                    <option>Turismo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Informe</label>
                                <select class="custom-select form-control border border-secondary" id="inputGroupSelect01"  name="cv">
                                    <option value="Cuatrimestral">Cuatrimestral</option>
                                    <option value="Anual"> Anual</option>
                                </select>
                            </div>

                        </div>
                           
                            <br>
                            <button type="submit" class="btn btn-primary">Generar Archivo</button>
                        </form>                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin de apartado de formulario -->
@endsection
