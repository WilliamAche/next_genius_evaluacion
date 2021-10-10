<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    /**
    * lleva a la lista de los usuario
    */
    public function index()
    {
        $users = User::all();

        return view('pages.list.users')
        ->with('users',$users);
    } 

}
