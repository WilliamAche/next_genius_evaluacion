<?php

namespace App\Http\Controllers;

// Models
use App\Models\Course;
use App\Models\Orders;
// Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    
    /**
    * lleva a la vista del catalogo
    */
    public function index(){

        try{

            $course = Course::all()->where('status', 1);
            return view('pages.shop.index')
            ->with('course', $course);

        } catch (\Throwable $th) {
            Log::error('ShopController - index -> Error: '.$th);
            abort(500, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
     * Crea una orden
    */
    public function order($id){

        $course = Course::find($id);

        $order = Orders::create([
            'user' => Auth::id(),
            'course' => $course->id,
            'price' => $course->price,
        ]);

        $order->save();

        alert()->success('Curso comprado', 'Esperando aprobacion de los administradores');
        return redirect()->route('shop.list');
    }

    /**
    * lleva a la vista de las ordenes
    */
    public function orderList(){

        $order = Orders::all()->where('status', 0);

        return view('pages.shop.orders')
        ->with('order', $order);
    }

    /**
    * Actualiza la orden
    */
    public function orderUpdate($status, $id){

        if($status == "approved")
        $status = '1';
        
        elseif($status == "rejected")
        $status = '2';

        $order = Orders::find($id);

        $order->update([
            'status' => $status
        ]);

        $order->save();

        alert()->success('Orden actualizada');
        return redirect()->route('course.orders');
    }

    /**
    * lleva a una vista mas detallada del curso
    */
    public function details($id){

        $course = Course::find($id);

        return view('pages.shop.details')
        ->with('course', $course);
    }

    /**
    * lleva a la vista de las facturas
    */
    public function bill(){

        $order = Orders::where('user',Auth::id())->get();

        return view('user.bills.index')
        ->with('order', $order);
    }

}
