<?php

namespace App\Http\Controllers;

// Models
use App\Models\Course;

// Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{

    /**
    * lleva a la vista para crear el curso
    */
    public function create(){

        try {

            return view('admin.Courses.create');

        } catch (\Throwable $th) {
            Log::error('CourseController - create -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
     * Valida los campos y crea el curso
    */
    public function store(Request $request){

        try {

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

        } catch (\Throwable $th) {
            Log::error('CourseController - store -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
    * lleva a la vista para editar el curso
    */
    public function editAdmin($id){

        try {

            $course = Course::find($id);

            return view('admin.Courses.edit')
            ->with('course', $course);

        } catch (\Throwable $th) {
            Log::error('CourseController - editAdmin -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }


    /**
     * Valida los campos y actualiza el curso
    */
    public function updateAdmin(Request $request, $id){

        try {

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

        } catch (\Throwable $th) {
            Log::error('CourseController - updateAdmin -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
    * lleva a la lista de los curso
    */
    public function listAdmin(){
        
        try {

            $course = Course::all();

            return view('admin.Courses.list')
            ->with('course', $course);

        } catch (\Throwable $th) {
            Log::error('CourseController - listAdmin -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
    * permite eliminar el curso
    */
    public function destroy($id){

        try {

        $course = Course::find($id);

        $course->delete();
        
        alert()->success('Curso eliminado');
        return redirect()->route('course.list')->with('msj-success', 'Curso '.$id.' Eliminado');

        } catch (\Throwable $th) {
            Log::error('CourseController - destroy -> Error: '.$th);
            abort(500, "Ocurrio un error, contacte con el administrador");
        }
    }



    // USERS

    /**
    * lleva a la lista de los curso
    */
    public function listUser(){
        
        try {

            $course = Course::all();

            return view('user.courses.list')
            ->with('course', $course);

        } catch (\Throwable $th) {
            Log::error('CourseController - listUser -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

}
