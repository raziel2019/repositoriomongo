<style>
    .main-panel {
        
         width: 100% !important;
         float: none !important; 
        
    }
    .main-header {
        display: none !important;
    }
    .sidebar, .sidebar[data-background-color=white] {
        display: none !important;
    }
    .cabecera-img{
        display:block;
        margin:auto;
      }
    
      .py-4 {
        padding-top: 3.5rem !important;
    }
    
    #titulo{
     
        margin-top: 5px;
        font-weight: 600;
        font-size: 14px;
        text-align: center;
        color: #676a6c;
    }
    
    .colorut{
        background:#1ab394 !important;
    border-color: #1ab394 !important;
    cursor: pointer;
    width: 100%;
    color: #fff;
    }
    .m-t{
        margin-top: 1.5rem !important;
        color: #676a6c;
        text-align: center !important;
    }
    
    .footer {
        display: none !important;
    }
    #text-decoration-none{
  text-align: center ;
}
#alineado{
    text-align: center ;
    margin-top: 1rem;
}
    
    </style>

@extends('layouts.app')
@section('Titulo', 'Repositorio de investigaciones ')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div >
                <div ><img class="cabecera-img" src="{{asset('images/Logo.png') }} " width="310px" height="120px"></div>
                <h3 id="titulo"> Repositorio de investigaciones y publicaciones de Cuerpos Académicos </h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>  
                            <div class="col-md-6">
                               
                                <select class="custom-select" id="inputGroupSelect01"  name="division">
                                    <option value="Económico-Administrativa">Económico-Administrativa</option>
                                    <option value="Gastronomia">Gastronomia</option>
                                    <option value="Turismo">Turismo</option>
                                    <option value="Ingeniería y Tecnología">Ingeniería y Tecnología</option>
                                    </select>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Programa Educativo') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select" id="inputGroupSelect01"  name="programa">
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
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Nivel en el SEI') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select" id="inputGroupSelect01"  name="sei">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                    </select>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' Perfil  PRODEP') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select" id="inputGroupSelect01"  name="prodep">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                    </select>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' Grado de estudios') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select" id="inputGroupSelect01"  name="grado">
                                    <option value="Licenciatura">Licenciatura</option>
                                    <option value="Maestría">Maestría</option>
                                    <option value="Licenciatura">Especialidad</option>
                                    <option value="Maestría">Doctorado</option>
                                    </select>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
          
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Curp') }}</label>

                            <div class="col-md-6">
                                <input id="Curp" type="text" class="form-control @error('Curp') is-invalid @enderror" name="curp"  autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('RFC') }}</label>

                            <div class="col-md-6">
                                <input id="RFC" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc"  autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Categoria de profesor') }}</label>
                            <div class="col-md-6">
                                <select class="custom-select" id="inputGroupSelect01" name="cat_profesor">
                                <option value="PTC">PTC</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Administrador">Administrador</option>
                                </select>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="especialidad" class="col-md-4 col-form-label text-md-right">{{ __(' Especialidad') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select" id="inputGroupSelect01"  name="especialidad">
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

          
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>                                       
                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Imagen perfil') }}</label>
                        
                        <div class="form-group col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="avatar" id="validatedCustomFile" >
                                    <label class="custom-file-label " for="validatedCustomFile">imagen de perfil...</label>
                                </div>
                            </div>
                            </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn  btn-lg btn-block colorut">
                                    {{ __('Registrate') }}
                                </button>
                                <p id="alineado"><a href="/login" id="text-decoration-none">Ya tengo cuenta</a> </p>
                            </div>
                        </div>
                    </form>
                    <p class="m-t">
                        <small>Universidad Tecnológica de Cancún</small>
                        <br>
                        <small>Organismo Público Descentralizado del Gobierno del Estado de Quintana Roo</small>
                        <br>
                        <small>Carretera Cancún-Aeropuerto, Km. 11.5, S.M. 299, Mz. 5, Lt 1</small>
                        <br>
                        <small>Cancún, Quintana Roo, C.P. 77565</small>
                        <br>
                        <small>Tel. 01 (998) 881 19 00</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
