<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
class AutorController extends Controller
{
    public function principal(){
        return view('inicio');
    }
    public function registrar(Request $request){
        $autor = new Autor();
        $autor->nombre = $request->nombre;
        $autor->save();
        return back();
    }

    public function index(){
        $autores= Autor::where('estado', 1)->get();
        return view("persona.autor", compact('autores'));
    }

    public function eliminar($id){
        $autor = Autor::find($id);
        if ($autor) {
            $autor->estado = false;
            $autor->save();
            return back();
        }
    }

    public function actualizar(Request $request, $id){
        $autor = Autor::find($id);
        if ($autor) {
            $autor->nombre = $request->nombre;
            $autor->save();
            return redirect('indexAutor');
        }
    }

    public function show($id){
        $autor = Autor::find($id);

        return view('persona.personaEdit', compact('autor'));
    }
}
