<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

//Route::get('/lista-de-passageiros', [UserController::class, 'listUser']);
// ou Route::get('/lista-de-passageiros', [\App\Http\Controllers\UserController::class, 'listUser']);

//Route::get('usuarios', 'Form\\TesteController@listAllUsers')->name(users.listAll);