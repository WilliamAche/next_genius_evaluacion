<?php

namespace App\Http\Controllers;

// Models
use App\Models\Orders;
use App\Models\Course;

// Illuminate
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

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
            abort(500, "Ocurrio un error, contacte con el administrador");
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

        $order = Orders::where('user', Auth::id())->get();
        $course = Course::all();

            return view('home')
            ->with('order', $order)
            ->with('course', $course);
        
        } catch (\Throwable $th) {
            Log::error('HomeController - index -> Error: '.$th);
            abort(500, "Ocurrio un error, contacte con el administrador");
        }
    }
}
