<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CourseController extends Controller
{
    
    /**
    * lleva a la vista para crear el curso
    */
    public function create(){

        return view('admin.Courses.create');
    }

    // permite la creacion del curso

    public function store(Request $request){

        $fields = [
            "email" => ['required'],
            "whatsapp" => ['required'],
            "issue" => ['required'],
            "description" => ['required'],
            'status' => ['0'],
        ];

        $msj = [
            'email.required' => 'El email es Requerido',
            'whatsapp.required' => 'El whatsapp es Requerido',
            'issue.required' => 'El asunto es Requerido',
            'description.required' => 'La descripción es Requerido',
        ];

        $this->validate($request, $fields, $msj);

        $course = Course::create($request->all());
        $course->iduser = Auth::user()->id;
        $course->save();
        

        return redirect()->route('course.list')->with('msj-success', 'El Curso se creo Exitosamente');
    }

    // permite editar el curso

    public function editAdmin($id){

        $course = Course::find($id);

        return view('admin.Courses.edit')
        ->with('course', $course);
    }

    // permite actualizar el curso

    public function updateAdmin(Request $request, $id){

        $course = Course::find($id);

        $fields = [
            'status' => ['required'],
            'note_admin' => ['required']
        ];
        
        $msj = [
            'status.required' => 'Es requerido el Estatus de la course',
            'note_admin.required' => 'Es requerido Nota del admin',
        ];
        
        $this->validate($request, $fields, $msj);

        $course->update($request->all());
        $course->note_admin = $request->note_admin;
        $course->save();
        
        $route = route('course.list');
        return redirect($route)->with('msj-success', 'Curso '.$id.' Actualizado ');
    }

    // permite ver la lista de curso

    public function listAdmin(){
        
        $course = Course::all();

        View::share('titleg', 'Historial de Tickets');
        
        return view('admin.Courses.list')
        ->with('course', $course);
    }

    // permite ver el curso

    public function showAdmin($id){

        $course = Course::find($id);

        return view('admin.Courses.show')
        ->with('course', $course);
    }


  // permite eliminar un curso
    
  public function destroy($id)
  {
    $course = Course::find($id);
    
    $course->delete();
    
    return redirect()->route('course.list')->with('msj-success', 'Curso '.$id.' Eliminado');
  }


   // permite editar el curso

   public function editUser($id){

    $course = Course::find($id);

    return view('tickets.componenteTickets.user.edit-user')
    ->with('course', $course);
}

// permite actualizar el curso

public function updateUser(Request $request, $id){

    $course = Course::find($id);

    $fields = [
        "email" => ['required'],
        "whatsapp" => ['required'],
        "issue" => ['required'],
        "description" => ['required'],
        'status' => ['0'],
    ];

    $msj = [
        'email.required' => 'El email es Requerido',
        'whatsapp.required' => 'El whatsapp es Requerido',
        'issue.required' => 'El asunto es Requerido',
        'description.required' => 'La descripción es Requerido',
    ];
    
    $this->validate($request, $fields, $msj);

    $course->update($request->all());
    $course->note_admin = $request->note_admin;
    $course->save();
    
    $route = route('course.list-user');
    return redirect($route)->with('msj-success', 'Curso '.$id.' Actualizado ');
}

// permite ver la lista de curso

public function listUser(Request $request){

    $course = Course::where('iduser', Auth::id())->get();

    View::share('titleg', 'Historial de Tickets');

    return view('tickets.componenteTickets.user.list-user')
    ->with('course', $course);
}

// permite ver el curso

public function showUser($id){

    $course = Course::find($id);

    return view('tickets.componenteTickets.user.show-user')
    ->with('course', $course);
}


}
