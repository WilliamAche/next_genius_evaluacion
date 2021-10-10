<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ShopController extends Controller
{
    
    /**
    * lleva a la vista del catalogo
    */
    public function index(){

        return view('pages.shop.index');
    }

    /**
     * Valida los campos y crea el curso
    */
    public function store(Request $request){

        $fields = [
            "name" => ['required'],
            "price" => ['required'],
            "description" => ['required'],
            "status" => ['required'],
        ];

        $msj = [
            'name.required' => 'El titulo del curso es Requerido',
            'price.required' => 'El precio del curso es Requerido',
            'description.required' => 'La descripcion es Requerida',
            'status.required' => 'El estado es Requerido',
        ];

        $this->validate($request, $fields, $msj);

        $course = Course::create($request->all());

        //  guarda el banner
        if($request->hasFile('banner')) {
          
          $file = $request->file('banner');
          $name = $course->id.".".$file->getClientOriginalExtension();
          $file->move(public_path('storage') . '/course-banner', $name);
          $course->banner = $name;

        } 

        $course->save();

        alert()->success('Curso creado');
        return redirect()->route('course.list')->with('msj-success', 'El Curso se creo Exitosamente');
    }

    /**
    * lleva a la vista para editar el curso
    */
    public function editAdmin($id){

        $course = Course::find($id);

        return view('admin.Courses.edit')
        ->with('course', $course);
    }


    /**
     * Valida los campos y actualiza el curso
    */
    public function updateAdmin(Request $request, $id){

        $course = Course::find($id);

        $fields = [
            "name" => ['required'],
            "price" => ['required'],
            "description" => ['required'],
            "status" => ['required'],
        ];

        $msj = [
            'name.required' => 'El titulo del curso es Requerido',
            'price.required' => 'El precio del curso es Requerido',
            'description.required' => 'La descripcion es Requerida',
            'status.required' => 'El estado es Requerido',
        ];

        $this->validate($request, $fields, $msj);

        $course->update($request->all());

        //  guarda el banner
        if($request->hasFile('banner')) {
          
          //  eliminar el banner anterior
          $course->destroy(public_path('storage') . '/course-banner', $course->name);
          $file = $request->file('banner');
          $name = $course->id.".".$file->getClientOriginalExtension();
          $file->move(public_path('storage') . '/course-banner', $name);
          $course->banner = $name;

        } 
        $course->save();

        alert()->success('Curso actualizado');
        return redirect()->route('course.list')->with('msj-success', 'Curso '.$id.' Actualizado ');
    }

    /**
    * lleva a la lista de los curso
    */
    public function listAdmin(){
        
        $course = Course::all();

        return view('admin.Courses.list')
        ->with('course', $course);
    }

    /**
    * permite eliminar el curso
    */
    public function destroy($id){

        $course = Course::find($id);

        $course->delete();

        alert()->success('Curso eliminado');
        return redirect()->route('course.list')->with('msj-success', 'Curso '.$id.' Eliminado');
    }

    // permite ver el curso

    public function showUser($id){

        $course = Course::find($id);

        return view('tickets.componenteTickets.user.show-user')
        ->with('course', $course);
    }

}
