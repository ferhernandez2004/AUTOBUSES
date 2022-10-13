@extends('layouts.main', ['activePage' => 'editar_motoristas', 'titlePage' =>'Editar Motorista'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                  <form method="Post" class="col s12" action="{{route('motoristas.update', $motorista->id)}}" >
                        @csrf
                        @method('PATCH')
                        <div class="card">
                            <div class="card-header card-header-danger">
                                <h4 class="card-title">EDITAR MOTORISTAS</h4>
                            </div>
                            <div class="card-body">
                                    <div class="form-group row">
                                      <label for="inputnombres"  class="col-sm-2 col-form-label">Nombres</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputnombres" placeholder="Nombres" name="nombres" value="{{$motorista->nombres}}">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputapellidos" class="col-sm-2 col-form-label">Apellidos</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputapellidos" placeholder="Apellidos" name="apellidos" value="{{$motorista->apellidos}}">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputtelefono" class="col-sm-2 col-form-label">Telefono</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputtelefono" placeholder="Telefono" name="telefono" value="{{$motorista->telefono}}">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputemail" class="col-sm-2 col-form-label">Correo Electronico</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputemail" placeholder="Correo Electronico" name="email" value="{{$motorista->email}}">
                                        </div>                                          
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputdui" class="col-sm-2 col-form-label">Dui</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputemail" placeholder="Dui" name="dui" value="{{$motorista->dui}}">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputnit" class="col-sm-2 col-form-label">Nit</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputnit" placeholder="Nit" name="nit" value="{{$motorista->nit}}">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputlicencia" class="col-sm-2 col-form-label">Licencia</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputlicencia" placeholder="Licencia" name="licencia" value="{{$motorista->licencia}}">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputdireccion" class="col-sm-2 col-form-label">Direccion</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputdireccion" placeholder="Direcion" name="direccion" value="{{$motorista->direccion}}">
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