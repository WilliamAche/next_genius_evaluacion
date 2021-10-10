<?php

namespace App\Http\Controllers;

// Models
use App\Models\User;

// Illuminate
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{

    /**
    * lleva a la lista de los usuario
    */
    public function index()
    {
        try{

            $users = User::all();

            return view('admin.users.list')
            ->with('users',$users);

        } catch (\Throwable $th) {
            Log::error('UsersController - index -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    } 

}