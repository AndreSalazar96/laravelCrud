<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use  App\Models\EdoCivil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonasController extends Controller
{

    public function index()
    {
        $id_session = Auth::user()->id;
        $datos = Personas::select('*', 'personas.id_edo_civil', 'edo_civil.edo_civil')->join('edo_civil', 'personas.id_edo_civil', '=', 'edo_civil.id_edo_civil')->where('personas.id_usuario', '=', $id_session)->get();
        return view('welcome', compact('datos'), compact('id_session'));
    }


    public function create()
    {
        //el formulario donde nosotros agregamos datos
        $datos = EdoCivil::all();
        return view('agregar', compact('datos'));
        // return view('agregar');
    }


    public function store(Request $request)
    {
        //sirve para guardar datos en la DB
        $personas = new Personas();
        $personas->id_usuario = Auth::user()->id;
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->id_edo_civil = $request->post('id_edo_civil');
        $personas->save();

        return redirect()->route('personas.index')->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        //servidor para obtener un registro de nuestra tabla
        $personas = Personas::find($id);
        return view('eliminar', compact('personas'));
    }


    public function edit($id)
    {
        //este metodo nos sirve para traer los datos que se van a editar y los coloca en un formulario
        $personas = Personas::find($id);
        $edo_civil_select = EdoCivil::select('*')->get();
        return view('actualizar', compact('personas'), compact('edo_civil_select'));
    }


    public function update(Request $request, $id)
    {
        //este metodo actualiza los datos en la BD
        $personas = Personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->id_edo_civil = $request->post('id_edo_civil');
        $personas->save();

        return redirect()->route('personas.index')->with("success", "Actualizado con exito!");
    }

    public function destroy($id)
    {
        $personas = Personas::find($id);
        $personas->delete();

        return redirect()->route('personas.index')->with("success", "Eliminado con exito!");
    }
}
