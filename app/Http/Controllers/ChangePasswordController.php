<?php
   
namespace App\Http\Controllers;
   
// Models
use App\Models\User;

// Rules
use App\Rules\MatchOldPassword;

// Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
  
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
        try {

            return view('auth.passwords.change');

        } catch (\Throwable $th) {
            Log::error('ChangePasswordController - index -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    } 
   
    /**
     * Valida los campos y actualiza la contraseña
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => ['required'],
                'new_confirm_password' => ['same:new_password'],
            ]);
        
            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

            alert()->success('Contraseña cambiada','Tu contraseña se a cambiado existosamente');
            return view('home')->with('Toast Message', 'info');

        } catch (\Throwable $th) {
            Log::error('ChangePasswordController - store -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }
}