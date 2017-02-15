@extends('layouts.app')

@section('contenido')
   <!-- Registro -->
   <section class="ContentPage full-width">
        <div class="ContentPage-Nav full-width">  
        </div>
        <br>
        
        <div class="container">

            <form class="col s12" method="POST" action="{{url('/contacto')}}">
                <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                <div class="row">
                    <h2 class="center-align"> Registro de contacto </h2>
                    <div class="row">
                        <div class="col-md-12">
                            @if (count($errors)>0)
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
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
                            <input id="nombre" type="text" class="validate" name="nombre">
                            <label for="nombre" >Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="titulo" type="text" class="validate" name="titulo">
                            <label for="titulo" >Titulo</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="institucion" type="text" class="validate" name="institucion">
                            <label for="institucion" >Institucion</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input  type="text" class="validate" name="cargo">
                            <label for="cargo">Cargo</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s8">
                            <input  type="text" class="validate" name="direccion">
                            <label for="direccion">Direccion</label>
                        </div>
                    </div>
 

                <button type="submit"  class="btn btn-primary">Registrar Contacto</button>

             </form>
        </div>
        <br>
        <br>
    </section>
@endsection