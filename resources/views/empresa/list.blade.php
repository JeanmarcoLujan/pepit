@extends('layouts.app')

@section('contenido')
    <section class="ContentPage full-width">
        <div class="ContentPage-Nav full-width">  
        </div>
        <br>
        
        <div class="datos">
        	<h2 class="center-align"> Lista de Empresas </h2><a href="{{ url('/reporte_empresas') }}" class="btn btn-danger">Empresas - PDF</a>
        	<table>
	        <thead>
	          <tr>
	              <th data-field="id">Id</th>
	              <th data-field="RUC">RUC</th>
	              <th data-field="razon_social">Razón Social</th>
	              <th data-field="representante">Representante</th>
	              <th data-field="opciones">Opciones</th>
	          </tr>
	        </thead>

	        <tbody>
	          @foreach($empresas as $emp)
	          <tr>
	            <td>{{ $emp->id }}</td>
	            <td>{{ $emp->RUC }}</td>
	            <td>{{ $emp->razon_social }}</td>
	            <td>{{ $emp->representante }}</td>
	            <td>
	            	<a class="waves-effect waves-light btn " href="{{URL::action('EmpresaController@edit',$emp->id)}}">Editar</a>
	            	<a class="waves-effect waves-light btn #d50000 #00796b teal darken-2" href="ver/{{ $emp->id }}" >Ver</a>
	            </td>
	          </tr>
	   		  @endforeach
	        </tbody>
	      </table>
        </div>
        <br>
        <br>
    </section>
@endsection