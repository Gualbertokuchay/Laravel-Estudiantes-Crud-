<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')--Crud Alumno</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>

    <!-- Fontawesome Link -->
    <script src="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet" crossorigin="anonymous"></script>
 
  </head>
  <body class="bg-gray-100 text-gray-800">

    <!-- ruta para la tabla crear-->
    
    <nav class="h-16 flex justify-end py-4 px-16">
        
        
        <a href="{{route('alumnos.index')}}"class="text-white rounded px-4 pt-1 h-10 bg-red-500 font-semibold mx-2 hover:bg-red-600">INICIO</a>

        <a href="{{route('alumnos.create')}}" class="text-white rounded px-4 pt-1 h-10 bg-red-500 font-semibold mx-2 hover:bg-red-600">Crear datos del alumno</a>
         <!-- ruta para la tabla principal -->
    </nav>
  <main class="p-16 flex justify-center">
    @yield('content')
  </main>
  
  </body>
</html>