<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


    //Admin
    Route::group(['middleware'=>['role:admin', 'auth']], function () {
    Route::get('/adminhome', function(){ return view('admin.home');});
    Route::get('/admin', function () {return view('admin.home');});
    Route::get('/home', [HomeController::class, 'home']);
    Route::get('/role', [RoleController::class, 'index']);
    Route::get('/permissions', [PermissionController::class, 'index']);
    Route::get('/create',[RoleController::class, 'create']);
    Route::post('store', [RoleController::class, 'store']);
    Route::get('/delete/{id}',[RoleController::class, 'delete']);
    Route::get('/edit/{id}',[RoleController::class, 'edit']);
    Route::post('/update',[RoleController::class, 'update']);
    Route::get('/products',[RoleController::class, 'products']);
    Route::get('/addproduct',[RoleController::class, 'addproduct']);
    Route::post('/updateproduct',[RoleController::class, 'updateproduct']);
    Route::get('/deleteproduct/{id}',[RoleController::class, 'deleteproduct']);
    Route::get('/editproduct/{id}',[RoleController::class, 'editproduct']);


});
 



//User
 Route::group(['middleware'=>['auth', 'role:user']], function () {
    Route::get('/users', function () {return view('users.index');});
    Route::get('/usershome', function(){ return view('users.home');});
    Route::get('/home', [HomeController::class, 'index']);
//    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

}); 

