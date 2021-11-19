@extends('layouts.plantilla')

@section('Title')
    <h1>Edit</h1>
  <h1>Editar Datos</h1>


@endsection()

@section('contenido')

    <p>Edita un documento, cambia su aspecto y trabaja como lo hacías en tu antiguo programa. Documentos de Google guarda de forma automática cada cambio que realizas. En esta sección, aprenderás a hacer lo siguiente: Añadir y editar texto.</p>

   <center> <form action="{{route('sedes.update', $sede)}}" method="POST">
        @csrf
        @method('put')
        <label for="">Nombre
            <input type="text" name="nombre" id="" placeholder="nombre" value={{"$sede->nombre"}}>
        </label>
        <br>
        <label for="">Codigo_dane
            <input type="text" name="codigo_dane" placeholder="codigo_dane" value={{"$sede->codigo_dane"}}>
         </label>
         <br>
         <label for="">Establecimiento_id
            <input type="text" name="establecimiento_id" id="" placeholder="establecimiento_id" value={{"$sede->establecimiento_id"}}>
        </label>
        <br>

         <button type="submit">Actualizar Datos</button>
    </form>
</center>


@endsection()

