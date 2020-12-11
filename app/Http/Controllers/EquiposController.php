<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use App\Models\localidad;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    public function equiposIndex(){

        return view('equipos.equiposIndex');
    }

    public function listarequipos(){
        $equipos = equipo::orderBy('localidad_id','DESC')->get();
        $localidades = localidad::all();
        return view('equipos.listarequipos', compact('equipos','localidades'));
    }

    public function crearequipos(){
        $localidades = localidad::all();
        return view('equipos.crearequipos',compact('localidades'));
    }

    public function guardarequipos(Request $request){
        $request=equipo::create($request->all());
        return redirect()->route('equipos.listar')->with([
            'message'=>'Equipo Registrado Correctamente',
            'type'=>'info'
        ]);
    }

    public function editarequipos($id){
        $equipo=equipo::find($id);
        $localidades=localidad::all();
        return view('equipos.editarequipos',compact('equipo'),compact('localidades'));
    }
    public function actualizarequipos(Request $request,$id){
        $equipo=equipo::find($id)->update($request->all());
        return redirect()->route('equipos.listar')->with([
            'message'=>'Equipo actualizado correctamente',
            'type'=>'warning'
        ]);
    }
    public function eliminarequipos($id){
        $equipo=equipo::find($id)->delete();
        return redirect()->route('equipos.listar')->with([
            'message'=>'Equipo eliminado correctamente',
            'type'=>'danger'
        ]);
    }
}
