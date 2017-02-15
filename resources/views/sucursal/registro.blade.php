@extends('layouts.app')

@section('contenido')
    <section class="ContentPage full-width">
        <div class="ContentPage-Nav full-width"> </div>
        <br><br>
        
        <div class="ver_grupo">
            <h2 class="center-align"> Registro de Sucursales </h2>
            <div class="col-md-4">
                <form  method="POST">
                    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                    <div class="">
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

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
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
                            <div class="input-field col s12">
                                <select name="empresa_id" >
                                  <option disabled selected>Selecciones la empresa</option>
                                  @foreach($empresas as $emp)
                                  <option value="{{$emp->id}}">{{$emp->razon_social}}</option>
                                  @endforeach
                              </select>
                              <label>Empresas</label>
                          </div>
                        </div>
                        <div class="row">
                           <div class="input-field col s12">
                                <input  type="text" class="validate" name="manzana" value="{{old('manzana')}}">
                                <label  for="manzana"> Manzana </label>
                            </div>
                        </div>
                        <div class="row">
                             <div class="input-field col s12">
                                <input  type="text" class="validate" name="lote" value="{{old('lote')}}">
                                <label for="lote"> Lote </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="btnregistraremp" class="btn btn-primary">Registrar</button>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <td>Id</td>
                        <td>Empresa</td>
                        <td>Manzana</td>
                        <td>Lote</td>
                    </tr>
                    <tbody id="lista_sucursales">
                        
                    </tbody>
                </table>

            </div>
           


        </div>
    </section>

@endsection

@section('scripts')
    <script src="{{ asset('js/sucursal.js') }}"></script>
@endsection