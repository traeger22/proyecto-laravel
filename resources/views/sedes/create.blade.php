@extends('layouts.plantilla')

@section('Title')
    <h1>Create</h1>
  <h1>Crear Archivo</h1>


@endsection()

@section('contenido')

    <P>Editor de texto es un programa informático que permite crear y modificar archivos digitales compuestos únicamente por textos sin formato, conocidos comúnmente como archivos de texto o “texto plano”. El programa lee el archivo e interpreta los bytes leídos según el código de caracteres que usa el editor.</P>


  <center> <form action="{{route('sedes.store')}}" method="POST">
        @csrf
        <label for="">Nombre
            <input type="text" name="nombre" id="" placeholder="nombre">
        </label>
        <br>
        <label for="">Codigo_dane
            <input type="text" name="codigo_dane" placeholder="codigo_dane">
         </label>
         <br>

         <label for="">Establecimiento_id
            <input type="text" name="establecimiento_id" id="" placeholder="establecimiento_id">
        </label>
         <br>
         <button type="submit">Enviar formulario</button>
    </form>
</center>

@endsection()
