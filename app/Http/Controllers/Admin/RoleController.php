<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use lluminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $req)
    {
        $validate = $req->validate(['name'=>['required', 'min:3']]);
        Role::create($validate );

        //return view('admin.role.index');
        return view('admin.role.create')->with('Success', 'New Role created Successfuly');
    }

    public function edit($id)
    {
        
    }

    public function delete($id)
    {
        print($id);
        return redirect()->back('index');
    }

}
