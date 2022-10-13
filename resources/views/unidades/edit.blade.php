@extends('layouts.main', ['activePage' => 'unidades', 'titlePage' =>'EDITAR UNIDADES'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <form method="POST" class="col s12" action="{{route('unidades.update', $unidad->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title">EDITAR UNIDADES</h4>
                        </div>
                        <div class="card-body">
                                <div class="form-group row">
                                  <label for="inputmatricula"  class="col-sm-2 col-form-label">Matricula </label>
                                  <div class="col-sm-10">
                                    <input name="matricula" type="text" class="form-control" id="inputmatricula" placeholder="Matricula" autofocus value="{{$unidad->matricula}}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputmodelo" class="col-sm-2 col-form-label">Modelo</label>
                                    <div class="col-sm-10">
                                      <input name="modelo" type="text" class="form-control" id="inputmodelo" placeholder="Modelo" value="{{$unidad->modelo}}">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputmarca" class="col-sm-2 col-form-label">Marca</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputmarca" placeholder="Marca de unidad" name="marca" value="{{$unidad->marca}}">
                                    </div>                                          
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputmodelo_del_motor" class="col-sm-2 col-form-label">Modelo del motor</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputmodelo_del_motor" placeholder="Modelo del motor" name="modelo_del_motor" value="{{$unidad->modelo_del_motor}}">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputcombustible" class="col-sm-2 col-form-label">Combustible</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputcombustible" placeholder="Combustible" name="combustible" value="{{$unidad->combustible}}">
                                    </div>
                                  </div>
                       </div>
                       <!--Footer-->
                       <div class="car-footer ml-auto mr-auto">
                          <button type="submit" class="btn btn-danger">Guardar</button>
                       </div>
                       <!--End footer-->
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection