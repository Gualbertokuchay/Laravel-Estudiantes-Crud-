@extends('layouts.app')

@section('title','edit')

@section('content')
<!-- hacer un llamado post al request de store -->
<form action="{{route('alumnos.update',$alumno->id)}}"method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounde">
 @csrf
 @method('put')
<h2 class="text-2x1 text-center py-4 mb-4 font-semibold">
    
<!--Especificamos que tabla tenemos que editar -->
    Editar Datos de los Alumnos {{$alumno->id}}

</h2>
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="id" name="id" value="{{$alumno->id}}">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="nombre" name=" nombre" value="{{$alumno->nombre}}">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="apellido" name="apellido" value="{{$alumno->apellido}}">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="matricula" name="matricula" value="{{$alumno->matricula}}">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="telefono" name="telefono" value="{{$alumno->telefono}}">
<input class= "my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="correo" name="correo" value="{{$alumno->correo}}">
<button type="submit" class="my-3 w-full bg-red-500 p-2 font-semibold rounded text-white hover:bg-red-600">Crear</button>
</form>
@endsection