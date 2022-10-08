<style>
    .btn-primary{
    background:none !important;
    border-color: none !important;
    color: #FFFFFF;
    }
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
    .btn-link {
    margin-left: auto !important;
    margin-right: auto !important;
    display: block !important;

}

}
.m-t{
    margin-top: 1.5rem !important;
    color: #676a6c;
    text-align: center !important;
}

.footer {
    display: none !important;
}

</style>

@extends('layouts.app')
@section('Titulo', 'Repositorio de investigaciones ')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div><img class="cabecera-img" src="{{asset('images/Logo.png') }} " width="310px" height="120px"></div>
                <h3 id="titulo"> Repositorio de investigaciones y publicaciones de Cuerpos Académicos </h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn  colorut">
                                    {{ __('Ingresar') }}
                                </button>

                               
                                <a class="btn btn-link" href="/register">
                                         ¿No tienes cuenta?  Registrate aqui 
                                    </a>
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
