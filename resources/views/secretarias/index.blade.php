@extends('layouts.plantilla')

@section('Title')
    <center><h1>Secretarias</h1></center>
    <h1>Pagina principal</h1>


@endsection()

@section('contenido')

    <P>Planear, dirigir, controlar y evaluar la operatividad de los servicios de educación en sus diferentes tipos, niveles, modalidades y vertientes, en observancia de los planes y programas de desarrollo educativo autorizados, así como propiciar el desarrollo profesional de las y los docentes.</P>


<br>
<br>
<br>
<br>
   <center>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>

                <th>Id</th>
                <th>Nombre</th>
                <th>Ubicacion</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $secretaria as $secretarias )
                <tr>

                    <td>{{$secretarias->id}}</td>
                    <td><a href="{{route('secretarias.show', $secretarias->id)}}"> {{$secretarias->nombre}} </a></td>
                    <td>{{$secretarias->ubicacion}}</td>


                </tr>
            @endforeach




                {{$secretaria->links()}}

        </tbody>
    </table>


</center>
<a href="{{route('secretarias.create')}}">crear</a>


@endsection()
