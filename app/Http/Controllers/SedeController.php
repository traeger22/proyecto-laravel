<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    public function index(){
        //este metodo se encarga de mostrar el conteniedo de la tabla
        $sede = Sede::paginate(15);
        return view('sedes.index', compact('sede'));


    }

    public function create(){
        //se encarga de mostrar el formulario de crear datos
        return view('sede.create');
    }

    public function store(request $request){

        $sede = new Sede();
        $sede->nombre = $request->nombre;
        $sede->codigo_dane = $request->codigo_dane;
        $sede->establecimiento_id = $request->establecimiento_id;

        $sede-> save();

        return redirect()->route('sedes.show', $sede->id);
    }

    public function show($id){
        //show
        $sede = Sede::find($id);
        //return $sede;

        return view('sedes.show', compact('sede'));
    }

    public function edit(sede $sede){
        //se encarga de editar datos de la aplicacion
       // $sede = Sede::find($id);
        return view('sedes.edit',compact('sede'));
    }

    public function update(request $request, sede $sede){
        // se encarga de actualizar datos
        //return view('sedes.update');
        $sede->nombre = $request->nombre;
        $sede->codigo_dane = $request->codigo_dane;
        $sede->establecimiento_id = $request->establecimiento_id;

        $sede->save();
        return redirect()->route('sedes.show', $sede->id);
    }


    public function destroy(sede $sede){
        //se encarga de borrar datos de la base de datos
        $sede->delete();

        return redirect()->route('sedes.index');
       // return view('sedes.destroy');


    }
}
