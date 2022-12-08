
@extends('layouts.app')

@section('title')

@section('content')

   
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fontawesome Link -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
 
  </head><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <body class="bg-black-100 text-white-800">

    <!-- ruta para la tabla crear-->
    
<!-- hacer un llamado post al request de store -->
<form action="{{route('alumnos.store')}}" method="POST" class="border-red-100 shadow-x1 rounde">
 
<h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Crear Datos de Alumnos</h2>
@csrf
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="id" name="id">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="nombre" name="nombre">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="apellido" name="apellido">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="matricula" name="matricula">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="telefono" name="telefono">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="correo" name="correo">
<button type="submit" class="my-3 w-full bg-purple-500 p-2 font-semibold rounded text-white hover:bg-purple-600">Crear</button>
</form>
@endsection