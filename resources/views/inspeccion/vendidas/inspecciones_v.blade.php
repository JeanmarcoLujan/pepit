@extends('layouts.app')

@section('contenido')
   <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <div class="ContentPage-Nav full-width">  
        </div>
        <br>
        <br>
        <div class="">
            <div class="container" align="center">
                <h4 align="center">Inspeccion <small>{{ $empresa->estado->descripcion}}</small> - {{ $empresa->empresa->razon_social}}</h4> 
            </div>
            <div class="ver_grupo"><h5>Registro de la inspeccion</h5></div>
            <div class="container">
                <div>
                   @if(Session::has('success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <ul>
                            <li>Se registro exitosamente</li>
                        </ul>
                    </div>
                    @endif 
                    @if(Session::has('segundos'))
                        <div><small>Timepo:</small><label>{{ Session::get('segundos') }}</label> <small>Segundos</small></div>
                    @endif  
                 </div>
                <form class="col s12" method="POST" action="{{url('/inspeccion')}}" enctype="multipart/form-data">
                    
                    <input type="hidden" name="tipo_inspeccion" id="tipo_inspeccion" value="{{ $empresa->estado_id }}">
                    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id  }}">
                    <input type="hidden" name="sucursal_id" id="sucursal_id" value="{{ $empresa->id}}">
                    <div class="row">
                        
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
                            <div class=" col s12">
                                <select name="nombre">
                                    <option disabled selected>Seleccione la inspeccion</option>
                                    <option>General</option>
                                    <option>Proyectos</option>
                                    <option>Seguridad</option>
                                    <option>Legal</option>
                                    <option>Infraestructura</option>
                                    <option>Acta de Visita</option>
                                </select>
                                <label for="nombre" >Nombre de la inspeccion</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="recibido" type="text" class="validate" name="recibido" value="{{old('recibido')}}">
                                <label for="recibido" >Nombres de la persona quien garantiza la inspeccion</label>
                            </div>
                        </div> 
                        <div class="row">          
                            <div class="input-field col s12">
                                <textarea id="observacion" name="observacion" class="materialize-textarea"></textarea>
                                <label for="observacion">Observacion</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="date" class="datepicker" name="fecha" value="{{old('fecha')}}">
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="file" name="foto">
                            </div>
                            <div class="col-md-6" align="center">
                                <input type="checkbox" class="filled-in" id="estado_inspeccion" name="estado_inspeccion"  value="1" />
                                <label for="estado_inspeccion" >Aprobada?</label>
                            </div>
                        </div>

                    </div>
                    <div class="row" align="center">
                        <button  type="submit" name="btnregistraremp" class=" btn #42a5f5 blue lighten-1">Registrar inspeccion</button>
                    </div>

                 </form>
            </div>
            <br><br><br>
            <div class="ver_grupo">
                <h5>Lista de inspecciones</h5><br>
                <a href="{{URL::action('PdfController@pdfInspecciones',$empresa->id)}}" class="btn btn-danger">Inspecciones - PDF</a>
                <br><br>
                <table class="table">
                    <tr class="info">
                        <td>Inspeccion</td>
                        <td>Usuario </td>
                        <td>Recibido por </td>
                        <td>Fecha </td>
                        <td>Observacion </td>
                        <td>Fotografia</td>
                        <td>Estado</td>
                    </tr>
                    @foreach($vistas as $vista)
                        <tr>
                            <td>{{$vista->nombre}}</td>
                            <td>{{$vista->user->name}}</td>
                            <td>{{$vista->recibido}}</td>
                            <td>{{$vista->fecha}}</td>
                            <td>{{$vista->observacion}}</td>
                            <td><a href="" data-target="#myModal{{$vista->id}}" data-toggle="modal"><img src="{{ asset('fotos/inspecciones/'.$vista->foto)}}" alt="{{ $vista->foto}}" height="100px" width="100px" class="img-thumbnail"></a></td>

                            @if( $vista->estado_inspeccion == 'Aprobada')
                                <td class="aprobada"><h6> {{ $vista->estado_inspeccion}}</h6></td>
                            @else
                                <td class="desaprobada"><h6>{{ $vista->estado_inspeccion}}</h6></td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

       

    </section>
    @foreach($vistas as $vista)
<div id="myModal{{$vista->id}}" class="modal fade modal-lg" role="dialog" >
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <img src="{{ asset('fotos/inspecciones/'.$vista->foto)}} " alt="{{ $vista->foto}}" height="700px" width="800px" class="img-thumbnail">
</div>
@endforeach
@endsection