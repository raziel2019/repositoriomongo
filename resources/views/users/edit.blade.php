@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')
    <div class="panel-header" style="background: #69bb85!important; border-color:#69bb85!important;">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold" > Perfil</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div align="center" class="card-title">Editar perfil</div>
                    </div>                
                    <div class="card-body">
                        <form action="{{ route('usuario.update',auth()->id() ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div  class="form-group col-md-6">
                                    <div class="form-group">
                                        <strong>Nombre:</strong>
                                        <input type="text" name="name" class="form-control" required value={{auth()->user()->name }}>
                                    </div>
                                </div>
                                <div  class="form-group col-md-6">
                                    <div class="form-group">
                                        <strong>Correo Electronico:</strong>
                                        <input type="text" name="email" class="form-control" required value={{auth()->user()->email }}>
                                    </div>
                                </div>
                               
                                <div  class="form-group col-md-6">
                                    <div class="form-group">
                                        <strong>Division:</strong>
                                        <select class="custom-select" id="inputGroupSelect01"  name="division" required value={{auth()->user()->division }}>
                                            <option value="Económico-Administrativa">Económico-Administrativa</option>
                                            <option value="Gastronomia">Gastronomia</option>
                                            <option value="Turismo">Turismo</option>
                                            <option value="Ingeniería y Tecnología">Ingeniería y Tecnología</option>
                                            </select>
                                    </div>
                                </div>
                                <div  class="form-group col-md-6">
                                    <div class="form-group">
                                        <strong>Programa Educativo:</strong>
                                        <select class="custom-select" id="inputGroupSelect01"  name="programa" required value={{auth()->user()->programa}}>
                                            <option value="TSU en Administración área Capital Humano">TSU en Administración área Capital Humano </option>
                                            <option value="TSU en Contaduría">TSU en Contaduría</option>
                                            <option value="TSU en Desarrollo de Negocios área Mercadotecnia">TSU en Desarrollo de Negocios área Mercadotecnia</option>
                                            <option value="TSU en Gastronomía">TSU en Gastronomía</option>
                                            <option value="TSU en Desarrollo de Software Multiplataforma">TSU en Desarrollo de Software Multiplataforma</option>
                                            <option value="TSU en Mantenimiento área Instalaciones">TSU en Mantenimiento área Instalaciones</option>
                                            <option value="TSU en Infraestructura de Redes Digitales">TSU en Infraestructura de Redes Digitales</option>
                                            <option value="TSU en Hotelería">TSU en Hotelería</option>
                                            <option value="TSU en Desarrollo de Productos Alternativos">TSU en Desarrollo de Productos Alternativos</option>
                                            <option value="TSU en Terapia Física">TSU en Terapia Física</option>
                                            <option value="Licenciatura en Gestión del Capital Humano">Licenciatura en Gestión del Capital Humano</option>
                                            <option value="Licenciatura en Innovación de Negocios y Mercadotecnia">Licenciatura en Innovación de Negocios y Mercadotecnia</option>
                                            <option value="Ingeniería Financiera y Fiscal">Ingeniería Financiera y Fiscal</option>
                                            <option value="Licenciatura en Gastronomía">Licenciatura en Gastronomía</option> 
                                            <option value="Ingeniería en Mantenimiento Industrial">Ingeniería en Mantenimiento Industrial</option>
                                            <option value="Ingeniería en Tecnologías de la Información y Comunicación">Ingeniería en Tecnologías de la Información y Comunicación</option>
                                            <option value="Licenciatura en Gestión y Desarrollo Turístico">Licenciatura en Gestión y Desarrollo Turístico</option>      
                                        </select>
                                    </div>
                                </div>
                                <div  class="form-group col-md-6">
                                    <div class="form-group">
                                        <strong>Nivel en el SEI:</strong>
                                        <select class="custom-select" id="inputGroupSelect01"  name="sei" required value={{auth()->user()->sei}}>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            </select>
                                    </div>
                                </div>
                                <div  class="form-group col-md-6">
                                    <div class="form-group">
                                        <strong>PRODEP:</strong>
                                        <select class="custom-select" id="inputGroupSelect01"  name="prodep" required value={{auth()->user()->prodep}} >
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            </select>
                                    </div>
                                </div>
                                <div  class="form-group col-md-6">
                                    <div class="form-group">
                                        <strong>Grado de Estudios:</strong>
                                        <select class="custom-select" id="inputGroupSelect01"  name="grado" required value={{auth()->user()->grado}}>
                                            <option value="Licenciatura">Licenciatura</option>
                                            <option value="Maestría">Maestría</option>
                                            <option value="Licenciatura">Especialidad</option>
                                            <option value="Maestría">Doctorado</option>
                                            </select>
                                    </div>
                                </div>
                                <div  class="form-group col-md-6">
                                    <div class="form-group">
                                        <strong>Curp:</strong>
                                        <input type="text" name="curp" class="form-control" required value={{auth()->user()->curp}}>
                                    </div>
                                </div>
                                <div  class="form-group col-md-6">
                                    <div class="form-group">
                                        <strong>RFC:</strong>
                                        <input type="text" name="rfc" class="form-control" required value={{auth()->user()->rfc}}>
                                    </div>
                                </div>
                                <div  class="form-group col-md-6">
                                    <div class="form-group">
                                        <strong>Cuerpo Académico:</strong>
                                        <select class="custom-select" id="inputGroupSelect01" required name="cat_profesor" value={{ auth()->user()->cat_profesor}}>
                                            <option value="PTC">PTC</option>
                                            <option value="Coordinador de CAA">Coordinador de CAA</option>
                                            <option value="Coordinador de División">Coordinador de División</option>
                                            <option value="Jefe de departamento de Investigación">Jefe del departamento de Investigación</option>
                                            <option value="Director de División">Director de División</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                <div class="form-group">
                                <strong>Especialidad:</strong>
                                <select class="custom-select" id="inputGroupSelect01"  name="especialidad" required value={{ auth()->user()->especialidad}}>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                    </select>
                                @error('especialidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                
                                <div class="form-group col-md-6">
                                <label for="inputState">Imagen de perfil</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="avatar" required id="validatedCustomFile" >
                                    <label class="custom-file-label  border border-secondary" for="validatedCustomFile">Archivo..</label>
                                </div>
                            </div>
                                <div class="col-auto my-3">
                                        <button type="submit" class="btn btn-primary btn-lg " style="background: #69bb85!important; border-color:#69bb85!important;">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
@endsection
