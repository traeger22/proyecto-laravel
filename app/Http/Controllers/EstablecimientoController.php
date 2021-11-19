<?php

namespace App\Http\Controllers;

use App\Models\Establecimiento;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    public function index(){
        //este metodo se encarga de mostrar el conteniedo de la tabla
        $establecimiento = Establecimiento::paginate(15);
        return view('establecimientos.index', compact('establecimiento'));


    }

    public function create(){
        //se encarga de mostrar el formulario de crear datos
        return view('establecimientos.create');
    }

    public function store(request $request){

        $establecimiento = new Establecimiento();
        $establecimiento->codigo_dane = $request->codigo_dane;
        $establecimiento->nombre = $request->nombre;
        $establecimiento->secretaria_id = $request->secretaria_id;

        $establecimiento-> save();

        return redirect()->route('establecimientos.show', $establecimiento->id);
    }

    public function show($id){
        //show
        $establecimiento = Establecimiento::find($id);
        //return $establecimiento;

        return view('establecimientos.show', compact('establecimiento'));
    }

    public function edit(establecimiento $establecimiento){
        //se encarga de editar datos de la aplicacion
       // $departamento = Departamento::find($id);
        return view('establecimientos.edit',compact('establecimiento'));
    }

    public function update(request $request, establecimiento $establecimiento){
        // se encarga de actualizar datos
        //return view('departamentos.update');
        $establecimiento->codigo_dane = $request->codigo_dane;
        $establecimiento->nombre = $request->nombre;
        $establecimiento->secretaria_id = $request->secretaria_id;

        $establecimiento->save();
        return redirect()->route('establecimientos.show', $establecimiento->id);
    }


    public function destroy(establecimiento $establecimiento){
        //se encarga de borrar datos de la base de datos
        $establecimiento->delete();

        return redirect()->route('establecimientos.index');
       // return view('departamentos.destroy');


    }

}
