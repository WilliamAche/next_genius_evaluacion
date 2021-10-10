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
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
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
            Log::error('ProfileController - __construct -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
    * lleva a la vista del perfil
    */
    public function profile()
    {
        try{

            $user = Auth::user();

            return view('pages.profile.index')
            ->with('user',$user);

        } catch (\Throwable $th) {
            Log::error('ProfileController - profile -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    } 
    
    /**
    * lleva a la vista del perfil
    */
    public function update(Request $request)
    {
        try{
 
            $user = User::find(Auth::id());

            $user->update($request->all());

            // guarda la foto de perfil
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $name = $user->id.".".$file->getClientOriginalExtension();
                $file->move(public_path('storage') . '/photo-profile', $name);
                $user->photo = $name;
             }  

            //  guarda el banner
             if ($request->hasFile('banner')) {
                $file = $request->file('banner');
                $name = $user->id.".".$file->getClientOriginalExtension();
                $file->move(public_path('storage') . '/photo-banner', $name);
                $user->banner = $name;
             } 

            $user->save();

            alert()->success('Perfil Actualizado');
            return redirect()->route('profile')
            ->with('user',$user);

        } catch (\Throwable $th) {
            Log::error('ProfileController - update -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }
   
    /**
     * lleva a la vista para cambiar la contraseña
     */
    public function changePassword()
    {
        try{

            return view('auth.passwords.change');

        } catch (\Throwable $th) {
            Log::error('ProfileController - changePassword -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    } 
   
    /**
     * Valida los campos y actualiza la contraseña
     */
    public function store(Request $request)
    {
        try{

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        alert()->success('Contraseña cambiada');
        return view('home')->with('Toast Message', 'info');

        } catch (\Throwable $th) {
            Log::error('ProfileController - store -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }
}