<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $data = product::all();
        return view('admin.products.products', compact('data'));
    }


    public function addproduct(Request $req)
    {
        return view('admin.products.addproduct');
    }

    public function updateproduct(Request $req)
    {
        $req->validate([
        'name' => 'required',
        'price' => 'required',
    ]);
        DB::table('product')->insert([
            'name'=>$req->input('name'),
            'price'=>$req->input('price'),
        ]);
        return redirect()->back()->with("Good");
       //return "good";
    }

    public function deleteproduct($id)
    {
       $data = product::find($id)->delete();
       return  redirect()->back();
    }

    public function edit1()
    {
        return ;
    }

    public function editproduct($id)
    {
       $data = product::find($id);
       return view('admin.products.edit', compact('data'));
    }

}
