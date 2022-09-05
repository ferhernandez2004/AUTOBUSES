@extends('layouts.main', ['activePage' => 'registro_motoristas', 'titlePage' =>'Registrar Motorista'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                  <form method="post" class="col s12" action="{{route('motoristas.store')}}">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-danger">
                                <h4 class="card-title">REGISTRO MOTORISTAS</h4>
                            </div>
                            <div class="card-body">
                                    <div class="form-group row">
                                      <label for="inputnombres"  class="col-sm-2 col-form-label">Nombres</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputnombres" placeholder="Nombres" name="nombres">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputapellidos" class="col-sm-2 col-form-label">Apellidos</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputapellidos" placeholder="Apellidos" name="apellidos">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputtelefono" class="col-sm-2 col-form-label">Telefono</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputtelefono" placeholder="Telefono" name="telefono">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputemail" class="col-sm-2 col-form-label">Correo Electronico</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputemail" placeholder="Correo Electronico" name="email">
                                        </div>                                          
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputdui" class="col-sm-2 col-form-label">Dui</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputemail" placeholder="Dui" name="dui">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputnit" class="col-sm-2 col-form-label">Nit</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputnit" placeholder="Nit" name="nit">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputlicencia" class="col-sm-2 col-form-label">Licencia</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputlicencia" placeholder="Licencia" name="licencia">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputdireccion" class="col-sm-2 col-form-label">Direccion</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputdireccion" placeholder="Direcion" name="direccion">
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