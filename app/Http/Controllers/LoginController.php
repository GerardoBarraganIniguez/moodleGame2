<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        if (auth()->attempt($request->only('email','password'))) { //si existe //tiene que estar hasheada la contraseña
            if(auth()->user()->role_id == 1){ //si es admin
                return view('adminUser.main');
            }
            if(auth()->user()->role_id == 2){ //si es estudiante
                return view('studentUser.main');
            }
            if(auth()->user()->role_id == 3){ //si es maestro
                return redirect()->route('classrooms_teachers.index'); //se hizo asi por el problema con la paginacion por el POST
            }
        }
        else{ //si no existe el user
            return back();
        }
        
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('auth.login');
    }

    
}
