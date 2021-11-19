@extends('layouts.plantilla')

@section('Title')
    <h1>Welcome</h1>
@endsection()



@section('contenido')
    <a href="{{route('sedes.index')}}">volver a index</a>
    <br>

    <h1>Bienvenido: {{$sede->nombre}}</h1>
    <p><strong>codigo id:</strong> {{$sede->codigo_dane}} </p>
    <p><strong>establecimiento id:</strong>{{$sede->establecimiento_id}}</p>


    <P>Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original.</P>

    <form action="{{route('sedes.destroy', $sede)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    <a href="{{route('sedes.edit', $sede)}}">editar</a>

@endsection()
