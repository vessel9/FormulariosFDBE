@extends('welcome')
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Formulario de Registro de la Fundación Diabetes Juvenil del Ecuador
        </h1>
    </div>
</div>
<form action="{{action('FormularioController@store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="">Cedula</label>
                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">Nombres</label>
                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de Nacimiento">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">Lugar de nacimiento</label>
                <input type="text" class="form-control" name="lugar_nacimiento" id="lugar_nacimiento" placeholder="Lugar de nacimiento">
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-4">
                <select class="form-select" aria-label="Default select example" name="id_ciudad">
                    <option selected>Seleccione tipo de diabetes:</option>
                    @foreach($nombreCiudad as $ciudad)
                    <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="col-4">
                <select class="form-select" aria-label="Default select example" name="id_diabetes">
                    <option selected>Seleccione tipo de diabetes:</option>
                    @foreach($tipoDiabetes as $tipo)
                    <option value="{{$tipo->id}}">{{$tipo->tipo_diabetes}}</option>
                    @endforeach
                  </select>
            </div>
    </div>
    <div class="row">
        <div class="col-4">
            <button type="submit">Enviar</button>
        </div>
    </div>
</form>
@endsection