<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {

    }
    public function create()
    {
        return view('role.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        Role::create([
            'name' => $request->name
        ]);

        return redirect()->route('roles.index');
    }
}
