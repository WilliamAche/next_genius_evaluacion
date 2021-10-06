<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Rules\MatchOldPassword;

use RealRashid\SweetAlert\Facades\Alert;
  
class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * lleva a la vista
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.passwords.change');
    } 
   
    /**
     * Valida los campos y actualiza la contraseña
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        alert()->success('Contraseña cambiada','Tu contraseña se a cambiado existosamente');
        return view('home')->with('Toast Message', 'info');
   
    }
}