<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use App\Models\jugador;
use Illuminate\Http\Request;
use App\Models\localidad;

class LigaController extends Controller
{
    public function index(){
        return view('index');
    }

    public function localidadesIndex(){

        return view('localidades.localidadesIndex');

    }

    public function localidadesListar(){

        $localidad = localidad::orderBy('localidad','ASC')->get();

        return view('localidades.listarlocalidades', compact('localidad'));

    }

    public function crearlocalidad(){
        return view('localidades.crearlocalidad');
    }
    public function guardarlocalidad(Request $request)
    {
        $localidad = localidad::create($request->all());
        return redirect()->route('localidad.listar')->with([
            'message' => 'Localidad Registrada Correctamente',
            'type' => 'info'
        ]);
    }
    public function editarlocalidad($id)
    {
        $localidad = localidad::find($id);
        return view('localidades.editarlocalidad',compact('localidad'));
    }

    public function actualizarlocalidad(Request $request, $id)
    {
        $localidad=localidad::find($id)->update($request->all());
        return redirect()->route('localidad.listar')->with([
           'message'=>'Localidad actualizada correctamente',
            'type'=>'warning'
        ]);
    }
    public function eliminarlocalidad($id){
        $localidad = localidad::find($id)->delete();
        return redirect()->route('localidad.listar')->with([
            'message'=>'Localidad Eliminarada correctamente',
            'type'=>'danger'
        ]);
    }
}
