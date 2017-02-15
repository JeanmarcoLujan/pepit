@extends('layouts.app')

@section('contenido')
    <section class="ContentPage full-width">
        <div class="ContentPage-Nav full-width">  
        </div>
        <br>
        <br>
        <div class="ver_grupo">
        	<h2 class="center-align">Grupo: <small>{{$grupo->grupo}}</small> </h2>
        	<br>
        	
            <div class="col-md-12">
                <a class="waves-effect waves-light btn #d50000 red accent-4" href="{{ url('/mesa') }}">Volver</a>
                <form method="POST" action="{{url('/grupo')}}">
                    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                    <input type="hidden" name="mesa_id" id="mesa_id" value="{{$grupo->id}}">
                    <div class="col-md-8">
                        <div class="input-field ">
                            <select name="contacto_id">
                              <option value="" disabled selected>Seleccione contacto</option>
                              @foreach($contactos_select as $contacto)
                                <option value="{{$contacto->id}}">{{$contacto->nombre}}</option>
                              @endforeach
                          </select>
                          <label>Seleccione contactos</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" name="" class="btn btn-primary">Añadir Contacto</button>
                    </div> 
              </form>
          </div>

          <div class="col-md-12 lista_grupo_contacto">
            <div class="panel panel-default">
              <div class="panel-heading">Lista de contactos del grupo</div>
              <div class="panel-body">
                <table>
                    <thead>
                        <tr>
                            <th data-field="id">Id</th>
                            <th data-field="nombre">Nombres</th>
                            <th data-field="titulo">Titulo</th>
                            <th data-field="institucion">Institución</th>
                            <th data-field="cargo">Cargo</th>
                            <th data-field="direccion">Dirección</th>
                            <th data-field="registrado">Registrado</th>
                        </tr>
                    </thead>

                    <tbody id="datoProyectos">
                        @foreach($contactos as $contacto)
                            <tr>
                                <td>{{$contacto->id}}</td>
                                <td>{{$contacto->nombre}}</td>
                                <td>{{$contacto->titulo}}</td>
                                <td>{{$contacto->institucion}}</td>
                                <td>{{$contacto->cargo}}</td>
                                <td>{{$contacto->direccion}}</td>
                                <td>{{$contacto->created_at}}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
  </section>
@endsection

