<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersRoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::resource('users', UserController::class);

Route::resource('roles', RoleController::class);


Route::get('/', function () {
    return 'welcome';
})->name('home');


//route
Route::get('/UsersRole/getShowUsers', [UsersRoleController::class, 'getShowUsers'])->name('UsersRole.showUsers');

Route::get('/UsersRole/ShowUsers/{id}', [UsersRoleController::class, 'showUsers']);

Route::resource('customer', CustomerController::class);

Route::get('/usersCustomer/showCustomer', [ CustomerController::class, 'index'])->name('usersCustomer.index');
