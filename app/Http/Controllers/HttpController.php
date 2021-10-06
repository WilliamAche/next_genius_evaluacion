<?php

namespace App\Http\Controllers;

class HttpController extends Controller
{
    /**
     * lleva a la vista
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function http403()
    {
        return view('pages.http.403');
    } 
}
