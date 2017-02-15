@extends('layouts.app')

@section('contenido')
   <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <div class="ContentPage-Nav full-width">  
        </div>
        <div class="container">
            <div align="center">
                <h4> Empresas <small>En Proceso</small></h4>
            </div>
            <div >
                <a href="{{URL::action('PdfController@pdfSucursalesProceso')}}" class="btn btn-danger">Sucursales - PDF</a>
            </div>
            <br>
            <table class="table">
                <tr class="info">
                    <td>RUC</td>
                    <td>Razon Social</td>
                    <td>Manzana - Lote</td>
                    <td>Opciones</td>
                </tr>
                @foreach($empresas as $empresa)
                    <tr>    
                      <td>{{ $empresa->ruc }}</td>
                      <td>{{ $empresa->razon_social }}</td>  
                      <td>{{ $empresa->manzana}}  - {{ $empresa->lote }}</td> 
                      <td><a href="{{URL::action('InspeccionController@ver_proceso',$empresa->id)}}"><button class="btn btn-info">Ver</button></a></td>
                    </tr>  
                @endforeach
            </table>
        </div>

       

    </section>
@endsection