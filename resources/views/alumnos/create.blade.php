
@extends('layouts.app')

@section('title','Create')

@section('content')
<!-- hacer un llamado post al request de store -->
<form action="{{route('alumnos.store')}}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounde">
 
<h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Crear Datos de Alumnos</h2>
@csrf
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="id" name="id">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="nombre" name="nombre">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="apellido" name="apellido">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="matricula" name="matricula">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="telefono" name="telefono">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="correo" name="correo">
<button type="submit" class="my-3 w-full bg-red-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Crear</button>
</form>
@endsection