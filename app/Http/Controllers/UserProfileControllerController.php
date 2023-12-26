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
    public function edit(UserProfileController $userProfileController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfileController  $userProfileController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfileController $userProfileController)
    {
        //
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
