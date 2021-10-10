<?php

namespace App\Http\Controllers;

// Illuminate
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        try{

            $this->middleware('auth');

        } catch (\Throwable $th) {
            Log::error('HomeController - __construct -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try{

            return view('home');
        
        } catch (\Throwable $th) {
            Log::error('HomeController - index -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }
}
