@extends('layouts.main', ['activePage' => 'registro_motoristas', 'titlePage' =>'Registrar Motorista'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="GET" class="col s12" action="{{route('motoristas.store')}}">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-danger">
                                <h4 class="card-title">REGISTRO MOTORISTAS</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col s12">
                                      Nombres:
                                      <div class="input-field inline">
                                          <input name="nombres" id="nombres_inline" type="text" class="validate" >
                                          <label for="nombres_inline">Nombres motorista</label>
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                      Apellidos:
                                      <div class="input-field inline">
                                           <input name="apellidos" id="apellidos_inline" type="text" class="validate">
                                           <label for="apellidos_inline">Apellidos motorista</label>
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                      Email:
                                      <div class="input-field inline">
                                          <input name="email" id="email_inline" type="email" class="validate">
                                          <label for="email_inline">Correo electronico</label>
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                      Telefono:
                                      <div class="input-field inline">
                                          <input name="telefono" id="telefono_inline" type="text" class="validate">
                                          <label for="telefono_inline">Telefono</label>
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                      DUI:
                                      <div class="input-field inline">
                                          <input name="dui" id="dui_inline" type="text" class="validate">
                                          <label for="dui_inline">Número de Dui</label>
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col s12">
                                   Nit:
                                    <div class="input-field inline">
                                        <input name="nit" id="nit_inline" type="text" class="validate">
                                        <label for="nit_inline">Número de Nit</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col s12">
                                  Direccion:
                                  <div class="input-field inline">
                                      <input name="direccion" id="direccion_inline" type="text" class="validate">
                                      <label for="direccion_inline">Direccion</label>
                                  </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col s12">
                                    Licencia:
                                    <div class="input-field inline">
                                    <input name="licencia" id="licencia_inline" type="text" class="validate">
                                    <label for="licencia_inline">Licencia</label>
                                    </div>
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