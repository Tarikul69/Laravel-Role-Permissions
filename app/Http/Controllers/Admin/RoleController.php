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

    

}
