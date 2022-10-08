@extends('layouts.admin')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
    <br>
        <h1 class="display-4">Actualizacion De Usuario</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('Administrador.update', $data->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="first_name">Nombre:</label>
                <input type="text" class="form-control" name="name" value={{ $data->name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $data->email }} />
            </div>

            <div class="form-group">
                <label for="email">Division:</label>
                <div >
                               
                                <select class="form-control custom-select" id="inputGroupSelect01"  name="division">
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
            <div class="form-group">
                <label for="programa">Programa:</label>
                <input type="text" class="form-control" name="programa" value={{ $data->programa }} />
            </div>
            <div class="form-group">
                <label for="sei">SEI:</label>
                <input type="text" class="form-control" name="sei" value={{ $data->sei }} />
            </div>
            <div class="form-group">
                <label for="prodep">PRODEP:</label>
                <input type="text" class="form-control" name="prodep" value={{ $data->prodep }} />
            </div>
            <div class="form-group">
                <label for="prodep">Grado:</label>
                <input type="text" class="form-control" name="grado" value={{ $data->grado }} />
            </div>
            <div class="form-group">
                <label for="curp">CURP:</label>
                <input type="text" class="form-control" name="curp" value={{ $data->curp }} />
            </div>
            <div class="form-group">
                <label for="rfc">RFC:</label>
                <input type="text" class="form-control" name="rfc" value={{ $data->rfc }} />
            </div>
            <div class="form-group">
                <label for="Role">Role:</label>
                <input type="text" class="form-control" name="cat_profesor" value={{ $data->cat_profesor }} />
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="text" class="form-control" name="password" value={{ $data->password }} />
            </div>
            <button type="submit" class="btn btn-primary" style="background: #69bb85!important; border-color:#69bb85!important;">Actualizar</button>
        </form>
    </div>
</div>
@endsection