@extends('layouts.plantilla')

@section('Title')
    <center><h1>Sedes</h1></center>
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
                <th>codigo_dane</th>
                <th>establecimientos_id</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $sede as $sedes )
                <tr>

                    <td>{{$sedes->id}}</td>
                    <td><a href="{{route('sedes.show', $sedes->id)}}"> {{$sedes->nombre}} </a></td>
                    <td>{{$sedes->codigo_dane}}</td>
                    <td>{{$sedes->establecimiento_id}}</td>

                </tr>
            @endforeach




                {{$sede->links()}}

        </tbody>
    </table>


</center>
<a href="{{route('sedes.create')}}">crear</a>


@endsection()

