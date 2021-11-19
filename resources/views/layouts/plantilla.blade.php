<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>app</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>

    <button type="submit"><a href="{{route('secretarias.index')}}">secretaria</a></button>
    <br>
    <button type="submit"><a href="{{route('establecimientos.index')}}">establecimientos</a></button>
    <br>
    <button type="submit"><a href="{{route('sedes.index')}}">sedes</a></button>


   <center><h1 class="titulo">Secretaria de educacion</h1></center>

    <p class="parrafo"> El Sistema de Información de la Secretaría de Educación de Antioquia busca reunir y organizar toda la información del sector educativo de los 117 municipios no certificados del Departamento de Antioquia, en los cuales tiene competencia la Secretaría.</p>
    <center><img src="https://360radio.com.co/wp-content/uploads/2020/04/Gobernaci%C3%B3n-de-Antioquia-4.jpg" alt=""> </center>



    @yield('Title')


    @yield('contenido')


</body>
</html>
