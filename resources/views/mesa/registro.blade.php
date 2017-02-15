@extends('layouts.app')

@section('contenido')
<!-- Registro -->
<section class="ContentPage full-width">
    <div class="ContentPage-Nav full-width">  
    </div>
    <br>

    <div class="container">
        <h2 class="center-align"> Grupos </h2>
        <div class="col-md-6">
            <small>Registro del grupo</small>
            <form class="col s12" method="POST" action="{{url('/mesa')}}">
                <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                <div class="row">
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
                    <div class="input-field col s12">
                        <input id="grupo" type="text" class="validate" name="grupo">
                        <label for="grupo" >Nombre del Grupo</label>
                    </div>
                </div>

            </div>

            <button type="submit" name="btnregistraremp" class="btn btn-primary">Registrar Grupo</button>

        </form>
    </div>
    <div class="col-md-6">
        <small>Lista de grupos</small>
        <table>
            <tr>
                <td>ID</td>
                <td>Nombre del Grupo</td>
                <td>Fecha de creacion</td>
                <td>Opciones</td>
            </tr>
            @foreach($grupos as $grupo)
            <tr>
                <td>{{$grupo->id}}</td>
                <td>{{$grupo->grupo}}</td>
                <td>{{$grupo->created_at}}</td>
                <td><a href="{{URL::action('MesaController@ver',$grupo->id)}}"><button class="btn btn-info">Ver</button></a></td>
            </tr>
            @endforeach
        </table>
    </div>

</div>

</section>
@endsection