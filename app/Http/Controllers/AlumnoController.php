<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumno;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{

    //selecioname todos los registros
    public function index(){
        //llamado a mi base de datos es alumno
    $alumno = Alumno::all();
    return view('alumnos.index', compact('alumno'));
    }

    public function create(){
//regresame a l vista del create.
        return view('alumnos.create');
    }

    public function store(Request $request){
    //llamar a la tabla de crear alumno con los siguientes nombres
      $alumno = new Alumno();
      $alumno->id = $request->id;
      $alumno->nombre = $request->nombre;
      $alumno->apellido = $request->apellido;
      $alumno->matricula = $request->matricula;
      $alumno->telefono = $request->telefono;
      $alumno->correo = $request->correo;
//hacer que guarde los datos que le estamos poniendo a la tabla en el crud
      $alumno->save();

      return redirect()->route('alumnos.index');

    }
    public function edit($id){

        $alumno = Alumno::find($id);

        return view('alumnos.edit', compact('alumno'));
    }
    //Editar los registros guardados por el create. y redirecioname a la pagina principal...
    public function update(Request $request, $id){
        $alumno = Alumno::find($id);

        $alumno->update($request->all());

        return redirect()->route('alumnos.index');
    }
    //destruir los datos creados/pero tambien haciendo que al dar borrar me redirecione al index (Pagina principal )
    public function destroy($id){
        $alumno = Alumno::find($id);
   //busca la fila de 
        $alumno->delete();

        return redirect()->route('alumnos.index');
    }

}
