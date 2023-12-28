<?php

namespace App\Http\Controllers;



// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // 
    public function register(Request $request)
    {

        //Validar los datos
        $request->validate([
            'name' => 'required|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'avatar' => 'required'
        ], [
            'name.required' => 'El nombre es requerido.',
            'email.required' => 'El email es requerido',
            'password.required' => 'El password es requerido',
            'email.unique' => 'Este correo ya existe',
            'avatar.required' => 'La imagen es requerida'
        ]);


        $user = new User();

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $destinationPath = 'img/avatar/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('avatar')->move($destinationPath, $filename);
            $user->avatar = $destinationPath . $filename;

        }

        $user->name = $request->name;
        $user->email = $request->email;
        // $user->avatar = $request->avatar;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect()->route('user.index');
    }

    public function login(Request $request)
    {

        //Validar los datos
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'El email es requerido',
            'password.required' => 'La contraseña es requerida'
        ]);

        // Validacion
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember' ? true : false));
        // $id_session = Auth::user()->id;

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('user.index'));
        } else {
            return redirect()->route('login')->with("refused", "Usuario no registrado");
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
