@extends('layouts.app')

@section('contenido')
    <section class="ContentPage full-width">
        <div class="ContentPage-Nav full-width">  
        </div>
        <br>
        <br>
        <div class="datos">
            <h2 class="center-align">Validacion del proceso</small> </h2>

            <table>
                <tr>
                    <td>RUC</td>
                    <td>Razon Social</td>
                    <td>Manazana</td>
                    <td>Lote</td>
                    <td>Estado actual</td>
                    <td>Estado</td>
                </tr>

                @foreach($empresas as $emp)
                    <tr >
                        <form >
                            <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                            <input type="hidden" name="id" id="id" value="{{ $emp->id }}">
                            <td>{{$emp->ruc}}</td>
                            <td>{{$emp->razon_social}}</td>
                            <td>{{$emp->manzana}}</td>
                            <td>{{$emp->lote}}</td>
                            <td>{{$emp->estado}}</td>
                            @if($emp->estado_id == 1)
                                
                                <td><button type="submit" class="btn btn-primary" onclick="updateEstado(this);" value="{{ $emp->id }}">Pasar "En Proceso"</button></td>
                            @elseif($emp->estado_id == 2)
                                <td><button type="submit" class="btn btn-primary #558b2f light-green darken-3" onclick="update(this);" value="{{ $emp->id }}">Pasar "Vendida"</button></td>
                            @else
                                <td>{{$emp->estado}}</td>
                            @endif
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
@endsection

@section('scripts')
     <script src="{{ asset('js/validacion.js') }}"></script>

@endsection