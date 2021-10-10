<?php

namespace App\Http\Controllers;

// Illuminate
use Illuminate\Support\Facades\Log;

class HttpController extends Controller
{
    /**
     * lleva a la vista
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function http403()
    {
        try{

            return view('pages.http.403');

        } catch (\Throwable $th) {
            Log::error('HttpController - http403 -> Error: '.$th);
            abort(500, "Ocurrio un error, contacte con el administrador");
        }
    } 
}