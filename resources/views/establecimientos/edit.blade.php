@extends('layouts.plantilla')

@section('Title')
    <h1>Edit</h1>
  <h1>Editar Datos</h1>


@endsection()

@section('contenido')

    <p>Edita un documento, cambia su aspecto y trabaja como lo hacías en tu antiguo programa. Documentos de Google guarda de forma automática cada cambio que realizas. En esta sección, aprenderás a hacer lo siguiente: Añadir y editar texto.</p>

   <center> <form action="{{route('establecimientos.update', $establecimiento)}}" method="POST">
        @csrf
        @method('put')
        <label for="">Codigo_dane
            <input type="text" name="codigo_dane" placeholder="codigo_dane" value={{"$establecimiento->codigo_dane"}}>
         </label>
         <br>

         <label for="">Nombre
             <input type="text" name="nombre" id="" placeholder="nombre" value={{"$establecimiento->nombre"}}>
         </label>
         <br>
         <label for="">Secretaria_id
            <input type="text" name="secretaria_id" id="" placeholder="secretaria_id" value={{"$establecimiento->secretaria_id"}}>
        </label>
        <br>

         <button type="submit">Actualizar Datos</button>
    </form>
</center>


@endsection()
