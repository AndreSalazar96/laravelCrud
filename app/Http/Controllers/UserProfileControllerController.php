<?php

namespace App\Http\Controllers;


use App\Models\Personas;
use  App\Models\EdoCivil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserProfileControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Listar info de usuario
        // $id_session = Auth::user()->id;
        $datos = User::all();
        return view('user', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfileController  $userProfileController
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfileController $userProfileController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfileController  $userProfileController
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //este metodo nos sirve para traer los datos que se van a editar y los coloca en un formulario
        $users = User::find($id);
        return view('user_edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfileController  $userProfileController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //este metodo actualiza los datos en la BD
        $users = User::find($id);

        $users->name = $request->post('name');
        $users->email = $request->post('email');
        // $users->avatar = $request->post('avatar');

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $destinationPath = 'img/avatar/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('avatar')->move($destinationPath, $filename);
            $users->avatar = $destinationPath . $filename;
        }

        $users->save();

        return redirect()->route('user.index')->with("successUser", "Información de usuario actualizada con exito!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfileController  $userProfileController
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfileController $userProfileController)
    {
        //
    }
}
