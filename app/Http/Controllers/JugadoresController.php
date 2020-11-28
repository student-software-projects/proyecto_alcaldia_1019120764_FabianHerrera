<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use App\Models\jugador;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    public function jugadoresIndex(){
        return view('jugadores.jugadoresIndex');
    }
    public function jugadoreslistar(){
        $jugadores=jugador::orderBy('equipo_id','DESC')->get();
        $equipos=equipo::all();
        return view('jugadores.jugadoreslistar', compact('jugadores'),compact('equipos'));
    }
    public function crearjugador(){
        $equipos=equipo::all();
        return view('jugadores.crearjugador',compact('equipos'));
    }
    public function guardarjugadores(Request $request){
        $jugadores=jugador::create($request->all());
        return redirect()->route('jugadores.listar')->with([
            'message'=>'Jugador Creado Correctamente',
            'type'=>'info'
        ]);
    }
    public function editarjugadores($id){
        $jugadores=jugador::find($id);
        $equipos=equipo::all();
        return view('jugadores.editarjugadores',compact('jugadores'),compact('equipos'));
    }
    public function actualizarjugadores(Request $request,$id){
        $jugadores=jugador::find($id)->update($request->all());
        return redirect()->route('jugadores.listar')->with([
            'message'=>'Jugador Modificado Satisfactoriamente',
            'type'=>'warnig'
        ]);
    }
    public function eliminarjugadores($id){
        $jugadores=jugador::find($id)->delete();
        return redirect()->route('jugadores.listar')->with([
            'message'=>'Jugador Eliminado',
            'type'=>'warning'
        ]);
    }
}
