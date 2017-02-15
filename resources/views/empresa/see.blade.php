@extends('layouts.app')

@section('contenido')
    <section class="ContentPage full-width">
        <div class="ContentPage-Nav full-width">  
        </div>
        <br>
        <br>
        <div class="container">
        	<h2 class="center-align">Empresas: <small>{{$empresa->razon_social}}</small> </h2>
        	<br>
        	<table>
        		<tr>
        			<td>RUC</td>
        			<td>{{$empresa->RUC}}</td>
        		</tr>
        		<tr>
        			<td>Representante - <label> DNI</label> </td>
        			<td>{{$empresa->representante}} - {{$empresa->dni}}</td>
        		</tr>
        		<tr>
        			<td>Contacto</td>
        			<td>{{$empresa->contacto}}</td>
        		</tr>
        		<tr>
        			<td>Teléfono - Anexo</td>
        			<td>{{$empresa->telefono1}} - {{$empresa->anexo1 }}</td>
        		</tr>
        		<tr>
        			<td>Teléfono 2</td>
        			<td>{{$empresa->telefono2}}</td>
        		</tr>
        		<tr>
        			<td>Correos</td>
        			<td>{{$empresa->correo1}}, {{$empresa->correo2}}</td>
        		</tr>
        		<tr>
        			<td>Fecha de Registro</td>
        			<td>{{$empresa->created_at}}</td>
        		</tr>
        		
        	</table>
        	<a class="waves-effect waves-light btn #d50000 red accent-4" href="{{ url('/empresa/show ') }}">Volver</a>
        </div>
    </section>
@endsection