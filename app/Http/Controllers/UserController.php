<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(){
        //Criando teste
        /* $user = new User();
        $user->name = 'Maria';
        $user->email = 'maria@email.com';
        $user->password = Hash::make( value: '123');
        $user->save(); */

        //echo "<h1>Listagem de passageiros</h1>";

        $user = User::where('id', 1)->first();
        //dd($user); // dd: dump and die
        return view('listUser', [
            'user' => $user
        ]);
    }
}
