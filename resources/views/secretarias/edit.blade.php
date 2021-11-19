@extends('layouts.plantilla')

@section('Title')
    <h1>Edit</h1>
  <h1>Editar Datos</h1>


@endsection()

@section('contenido')

    <p>Edita un documento, cambia su aspecto y trabaja como lo hacías en tu antiguo programa. Documentos de Google guarda de forma automática cada cambio que realizas. En esta sección, aprenderás a hacer lo siguiente: Añadir y editar texto.</p>

   <center> <form action="{{route('secretarias.update', $secretaria)}}" method="POST">
        @csrf
        @method('put')

        <label for="">Nombre
            <input type="text" name="nombre" id="" placeholder="nombre" value={{"$secretaria->nombre"}}>
        </label>
        <br>
        <label for="">Ubicacion
            <input type="text" name="ubicacion" placeholder="ubicacion" value={{"$secretaria->ubicacion"}}>
         </label>
         <br>


         <button type="submit">Actualizar Datos</button>
    </form>
</center>


@endsection()
