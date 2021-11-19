<?php

namespace App\Http\Controllers;
use App\Models\Secretaria;
use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    public function index(){
        //este metodo se encarga de mostrar el conteniedo de la tabla
        $secretaria = Secretaria::paginate(15);
        return view('secretarias.index', compact('secretaria'));


    }

    public function create(){
        //se encarga de mostrar el formulario de crear datos
        return view('secretarias.create');
    }

    public function store(request $request){

        $secretaria = new Secretaria();
        $secretaria->nombre = $request->nombre;
        $secretaria->ubicacion = $request->ubicacion;


        $secretaria-> save();

        return redirect()->route('secretarias.show', $secretaria->id);
    }

    public function show($id){
        //show
        $secretaria = Secretaria::find($id);
        //return

        return view('secretarias.show', compact('secretaria'));
    }

    public function edit(secretaria $secretaria){
        //se encarga de editar datos de la aplicacion

        return view('secretarias.edit',compact('secretaria'));
    }

    public function update(request $request, secretaria $secretaria){


        $secretaria->nombre = $request->nombre;
        $secretaria->ubicacion = $request->ubicacion;

        $secretaria->save();
        return redirect()->route('secretarias.show', $secretaria->id);
    }


    public function destroy(secretaria $secretaria){
        //se encarga de borrar datos de la base de datos
        $secretaria->delete();

        return redirect()->route('secretarias.index');



    }
}
