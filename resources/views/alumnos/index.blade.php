
@extends('layouts.app')

@section('title')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-purple-500 text-white w-full">
          <th class="w-20 py-4">ID</th>
          <th class="w-1/8 py-4">nombre</th>
          <th class="w-1/16 py-4">apellido</th>
          <th class="w-1/16 py-4">matricula</th>
          <th class="w-1/16 py-4">telefono</th>
          <th class="w-1/16 py-4">correo</th>
          <th class="w-28 py-4">edit/delete</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($alumno as $tabla)
            
         <!--validacion de los datos. los principales datos de la tabla alumno-->
        <tr>
          <td class="w-20 py-5">{{ $tabla->id}}</td>
          <td class="p-5">{{$tabla->nombre}}</td>
          <td class="p-5">{{$tabla->apellido}}</td>
          <td class="p-5">{{$tabla->matricula}}</td>
          <td class="p-5">{{$tabla->telefono}}</td>
          <td class="p-5 text-center">{{$tabla->correo}}</td>
          <td class="p-3">
            <form action="{{route('alumnos.destroy',$tabla->id)}}" method="POST">
            @csrf
            @method('delete')
            <button class="bg-purple-500 text-white px-3 py-1 rounded-sm m-4">
            <i class="fas fa-trash"></i></button>
            </form>
            <a href="{{route('alumnos.edit',$tabla->id)}}" class="bg-purple-500 text-white px-3 py-1 rounded-sm m-4">
            <i class="fas fa-pen"></i></button>
          </td>
        </tr>
<nav>
  
         <!-- ruta para la tabla principal -->
</nav>
        @endforeach
      </tbody>
    </table>
</div>
    
@endsection