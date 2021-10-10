<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;

use RealRashid\SweetAlert\Facades\Alert;
  
class ProfileController extends Controller
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
    * lleva a la vista del perfil
    */
    public function profile()
    {
        $user = Auth::user();

        return view('pages.profile.index')
        ->with('user',$user);
    } 
    
    /**
    * lleva a la vista del perfil
    */
    public function update(Request $request)
    {
 
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

    }
   
    /**
     * lleva a la vista para cambiar la contraseña
     */
    public function changePassword()
    {
        return view('auth.passwords.change');
    } 
   
    /**
     * Valida los campos y actualiza la contraseña
     */
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        alert()->success('Contraseña cambiada');
        return view('home')->with('Toast Message', 'info');
   
    }
}