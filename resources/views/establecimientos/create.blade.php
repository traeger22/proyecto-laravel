@extends('layouts.plantilla')

@section('Title')
    <h1>Create</h1>
  <h1>Crear Archivo</h1>


@endsection()

@section('contenido')

    <P>Editor de texto es un programa informático que permite crear y modificar archivos digitales compuestos únicamente por textos sin formato, conocidos comúnmente como archivos de texto o “texto plano”. El programa lee el archivo e interpreta los bytes leídos según el código de caracteres que usa el editor.</P>


  <center> <form action="{{route('establecimientos.store')}}" method="POST">
        @csrf
        <label for="">Codigo dane
            <input type="text" name="codigo_dane" placeholder="codigo_dane">
         </label>
         <br>
         <label for="">Nombre
             <input type="text" name="nombre" id="" placeholder="nombre">
         </label>
         <label for="">Secretaria id
            <input type="text" name="secretaria_id" id="" placeholder="secretaria_id">
        </label>
         <br>
         <button type="submit">Enviar formulario</button>
    </form>
</center>

@endsection()
