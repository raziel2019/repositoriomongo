@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')
<div class="panel-header colorut" >
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-black pb-2 fw-bold">Integracion de Expediente</h2>
          </div>		
        </div>
  </div>
  </div>
<div class="page-inner mt--5">	
<div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <div class="card-title">Subir un archivo </div>
                  </div>
              <div class="card-body">
                
      <form action="/files" method="POST" enctype="multipart/form-data">
     <div class="form-row">
        @csrf 
        <div class="form-group col-md-6 ">  
        <label for="inputEmail4">Titulo del Archivo:</label>
        <input type="text" class="form-control border border-secondary" name="titulo" placeholder="titulo">
      </div>
      <div class="form-group col-md-6 ">
        <label for="inputEmail4">Nombre Del Autor:</label>
        <input type="text" class="form-control border border-secondary" name="autor" placeholder="autor">
      </div>
      <div class="form-group col-md-6">
	                                <label for="inputPassword4">Tipo de Archivo</label>
	                                <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="tipo">
	                                    <option value="Artículo de Asesoría">Artículo de Asesoría</option>
	                                    <option value="Material didáctico">Material didáctico</option>      
                                      <option value="Proyecto de investigación">Proyecto de investigación</option>    
                                      <option value="Captura de Capacitacion">Captura de Capacitacion</option>    
                                      <option value="Artículo de difusión y divulgación">Artículo de difusión y divulgación</option>    
                                      <option value="Artículo en revista">Artículo en revista</option>    
                                      <option value="Capitulo del libro">Capitulo del libro</option>    
                                      <option value="Informe Tecnico">Informe Tecnico</option>    
                                      <option value="Tutoria Individual">Tutoria Individual</option> 
                                      <option value="Tutoria Grupal">Tutoria Grupal</option>    
                                      <option value="Curso">Curso</option>    
                                      <option value="Dirección individualizada">Dirección individualizada</option>
                                      <option value="Estadía en empresas">Estadía en empresas</option> 
                                      <option value="Cuerpo Académico">Cuerpo Académico</option>    
                                      <option value="Gestión Académica">Gestión Académica</option>    
                                      <option value="Capacitación docente">Capacitación docente</option>    
                                	</select>
	                            </div>
                            <div class="form-group col-md-6">
	                                <label for="inputPassword4">Periodo</label>
	                                <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="cuatrimestre">
                                  <option value="Enero-Abril">Enero-Abril</option>
                                  <option value="Mayo-Agosto">Mayo-Agosto</option>     
                                  <option value="Septiembre-Diciembre">Septiembre-Diciembre</option>     
                                  <option value="N/A">N/A</option>  
                                	</select>
	                            </div>
                              <div class="form-group col-md-12">
                                <label for="inputState">Captura de evidencia</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" >
                                    <label class="custom-file-label  border border-secondary" for="validatedCustomFile">Archivo..</label>
                                </div>
                            </div>
                           <input type="submit" class="btn btn-primary" value="Subir Archivo">
      </form>

      @endsection