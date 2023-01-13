<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
                $classrooms = auth()->user()->teacher_classrooms()->paginate(2); //resultados de una relación
                return view('teacherUser.main', compact('classrooms'));
            }
        }
        else{ //si no existe el user
            return back();
        }
        
    }
}
