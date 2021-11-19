
@extends('layouts.plantilla')

@section('Title')
    <center><h1>Establecimientos</h1></center>
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
                <th>Codigo_dane</th>
                <th>Nombre</th>
                <th>Secretaria_id</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $establecimiento as $establecimientos )
                <tr>

                    <td>{{$establecimientos->id}}</td>
                    <td>{{$establecimientos->codigo_dane}}</td>
                    <td><a href="{{route('establecimientos.show', $establecimientos->id)}}"> {{$establecimientos->nombre}} </a></td>
                    <td>{{$establecimientos->secretaria_id}}</td>

                </tr>
            @endforeach




                {{$establecimiento->links()}}

        </tbody>
    </table>


</center>
<a href="{{route('establecimientos.create')}}">crear</a>


@endsection()
