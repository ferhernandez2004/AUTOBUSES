@extends('layouts.main')
@section('content')
<head>
    <style type="text/css">
        form{
            width: 500px;
            height: 770px;
            margin: auto;
            border : black  2px solid;
            border-radius: 20px;
            background-color: white;
        }
     </style>
</head>
        <div class="container center">
            <h1>Editar unidades</h1>
            <form method="post" class="col s12" action="{{route('unidades.update', $unidad->id) }}">
                <div class="row">
                    @csrf 
                    @method('PATCH')
                    <div class="row">
                        <div class="col s12">
                          Matricula:
                          <div class="input-field inline">
                              <input name="matricula" id="matricula_inline" type="text" class="validate" required value="{{$unidad->matricula}}">
                              <label for="matricula_inline">Matricula de la unidad</label>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                          Modelo:
                          <div class="input-field inline">
                               <input name="modelo" id="modelo_inline" type="text" class="validate" required value="{{$unidad->modelo}}">
                               <label for="modelo_inline">Modelo de la unidad</label>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                          Marca:
                          <div class="input-field inline">
                              <input name="marca" id="marca_inline" type="text" class="validate" required value="{{$unidad->marca}}">
                              <label for="marca_inline">Marca de la unidad</label>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                          Modelo del motor:
                          <div class="input-field inline">
                              <input name="modelo_del_motor" id="modelo_del_motor_inline" type="text" class="validate" required value="{{$unidad->modelo_del_motor}}">
                              <label for="modelo_del_motor_inline">Modelo del motor</label>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                          Combustible:
                          <div class="input-field inline">
                              <input name="combustible" id="combustible_inline" type="text" class="validate" required value="{{$unidad->combustible}}">
                              <label for="combustible_inline">Tipo de combustible</label>
                          </div>
                        </div>
                    </div>
            <div class="row">
            <div class="row">
                <div class="input-field col s12">
                    <a href="{{ route('unidades.index')}}" class="btn yellow darken-4">Cancelar</a>
                    <input type="submit" value="Actualizar" class="btn green darken-4">
                </div>
            </div>
        </form>
    </div>
@endsection