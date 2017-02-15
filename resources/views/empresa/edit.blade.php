@extends('layouts.app')

@section('contenido')
   <!-- Registro -->
   <section class="ContentPage full-width">
        <div class="ContentPage-Nav full-width">  
        </div>
        <br>
        
        <div class="container">

            <form class="col s12" method="POST" action="{{URL::action('EmpresaController@update',$empresa->id)}}">
                <input type="hidden" name="_token" value='<?php echo csrf_token(); ?>'>
                <div class="row">
                    <h2 class="center-align"> Registro de Empresas </h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                            @if (count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="razon_social" type="text" class="validate" name="razon_social" value="{{ $empresa->razon_social}}">
                            <label for="razon_social" >Razon Social</label>
                        </div>

                         <div class="input-field col s4">
                            <input  type="text" class="validate" name="RUC" value="{{ $empresa->RUC}}">
                            <label for="RUC" >RUC</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input  type="text" class="validate" name="representante" value="{{ $empresa->representante}}" >
                            <label for="representante">Representante</label>
                        </div>

                        <div class="input-field col s4">
                            <input  type="text" class="validate" name="dni" value="{{ $empresa->dni}}">
                            <label for="dni" >DNI</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="contacto" type="text" class="validate" name="contacto" value="{{ $empresa->contacto}}">
                            <label for="contacto">Contacto Empresa</label>
                        </div>
                    </div>

                    <div class="row">

                            <div class="input-field col s3">
                                <i class="zmdi zmdi-phone prefix"></i>
                                <input id="telefono1" type="tel" class="validate" name="telefono1" value="{{ $empresa->telefono1}}">
                                <label for="telefono1">Telefono1</label>
                            </div>

                               <div class="input-field col s3">
                                <i class="zmdi zmdi-dot-circle prefix"></i>
                                <input id="anexo1" type="tel" class="validate" name="anexo1" value="{{ $empresa->anexo1}}">
                                <label for="anexo1">Anexo1</label>
                            </div>

                            <div class="input-field col s3">
                                <i class="zmdi zmdi-phone prefix"></i>
                                <input id="telefono2" type="tel" class="validate" name="telefono2" value="{{ $empresa->telefono2}}">
                                <label for="telefono2">Telefono2</label>
                            </div>

                            <div class="input-field col s3">
                                <i class="zmdi zmdi-phone prefix"></i>
                                <input id="telefono3" type="tel" class="validate" name="telefono3" value="{{ $empresa->telefono3}}">
                                <label for="telefono3">Telefono3</label>
                            </div>

                        </div>


                  
                        <div class="row">

                            <div class="input-field col s6">
                                <i class="zmdi zmdi-email prefix"></i>
                                <input id="correo1" type="text" class="validate" name="correo1" value="{{ $empresa->correo1}}">
                                <label for="correo1">Correo1</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="zmdi zmdi-email prefix"></i>
                                <input id="correo2" type="tel" class="validate" name="correo2" value="{{ $empresa->correo2}}">
                                <label for="correo2">Correo2</label>
                            </div>

                        </div>        
                </div>

                <button type="submit" name="btnregistraremp" class="btn btn-primary">Actualizar</button>

             </form>
        </div>
        <br>
        <br>
    </section>
@endsection