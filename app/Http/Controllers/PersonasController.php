<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        $datos = Personas::all();
        return view('welcome', compact('datos'));
    }


    public function create()
    {
        //el formulario donde nosotros agregamos datos
        return 'aqui puedes agregar';
    }


    public function store(Request $request)
    {
        //sirve para guardar datos en la DB
    }

    public function show(Personas $personas)
    {
        //servidor para obtener un registro de nuestra tabla
    }

 
    public function edit(Personas $personas)
    {
        //este metodo nos sirve para traer los datos que se van a editar y los coloca en un formulario
        return 'aqui puedes actualiza';

    }


    public function update(Request $request, Personas $personas)
    {
        //este metodo actualiza los datos en la BD
    }

    public function destroy(Personas $personas)
    {
        //elimina un registro
    }
}
