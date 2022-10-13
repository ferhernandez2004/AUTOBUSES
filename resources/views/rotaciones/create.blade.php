@extends('layouts.main', ['activePage' => 'rotaciones', 'titlePage' =>'ROTACIONES'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <form method="post" class="col s12" action="{{route('rotaciones.store')}}">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title">ROTACIONES</h4>
                        </div>
                        <div class="card-body">
                                <div class="form-group row">
                                  <label for="inputmatricula" class="col-sm-2 col-form-label">Motorista</label>
                                  <div class="col-sm-10">
                                    <input name="motorista" type="text" class="form-control" id="inputmotorista" placeholder="Motorista" >
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputasignacion_de_ruta" class="col-sm-2 col-form-label">Asignacion de ruta</label>
                                    <div class="col-sm-10">
                                      <input name="asignacion_de_ruta" type="text" class="form-control" id="inputasignacion_de _ruta" placeholder="Asignacion de ruta" >
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputfecha" class="col-sm-2 col-form-label">Fecha</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputfecha" placeholder="Fecha" name="fecha" >
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