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
        return view('admin.role.create')->with('Success', 'New Role created Successfuly');
    }
    public function edit(Role $role, $name)
    {
        $roles = Role::find($name);
        return view('admin.role.edit', compact('roles'));
    }

    public function update(Request $req, Role $role)
    {
         $validate = $req->validate(['name'=> 'required']);
         $role->update($validate);

         return redirect()->back();
    }

    public function delete($id)
    {
       $data =Role::find($id)->delete();
       return  redirect()->back();
    }



    //////////Products///////////
    public function products()
    {
        return view('admin.products.products');
    }

    public function addproduct()
    {
        return view('admin.products.addproduct');
    }

}
