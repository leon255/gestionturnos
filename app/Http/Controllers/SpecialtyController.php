<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specialty;

class SpecialtyController extends Controller
{
	//Las rutas que dirijan a este controller, exigiran que el usuario se haya autenticado.
    public function __construct(){
    	$this->middleware('auth');
    }

    //Retorna la vista index que se encuentra dentro de la carpeta specialties en resources.
    public function index(){
    	$specialties = Specialty::all();
    	return view('specialties.index', compact('specialties'));
    }

    /**
    Retorna la vista create que se encuentra dentro de la carpeta specialties en resources.
    Utiliza el verbo Get utilizado en la ruta correspondiente.
    Una vez completados los campos, se utiliza la funcion store para el envio de los datos.
    */
    public function create(){
    	return view('specialties.create');
    }


    //Reglas de validacion
    private function validation(Request $request){
        $rules=[
            'name'=> 'required|min:5',
        ];

        $messages=[
            'name.required'=> 'Es necesario ingresar el nombre de una especialidad',
            'name.min'=>'El nombre debe tener al menos 5 caracteres',
        ];

        $this->validate($request, $rules, $messages);
    }

    /**
    Genera una nueva instancia, almacena datos en los campos y      guarda.
    Recibe informacion del formulario de creacion de una especialidad.
    Envia datos introducidos en el formulario para su posterior almacenamiento.
    En la ruta correspondiente se utiliza el verbo Post en lugar de Get.
    */
    public function store(Request $request){

        //Llama a la funcion privada de validacion.
        $this->validation($request);

        $specialty  = new specialty();
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        $namespeciality= $specialty->name;
        
        $notification='La especialidad '.$namespeciality.' fue creada correctamente.';
        
        return redirect('/specialties')->with(compact('notification'));

    }

    //Retorna la vista edit que se encuentra dentro de la carpeta specialties en resources.
    public function edit(Specialty $specialty){
    	return view ('specialties.edit', compact('specialty'));
    }


    /**
      Recepcion de datos en los campos correspondientes para actualizar un registro.
      Recibe informacion del formulario de edicion, ademas de la especialidad que queremos editar.
      En la ruta se utiliza el verbo PUT.
    */
    public function update(Request $request, Specialty $specialty){

        //Llama a la funcion privada de validacion.
        $this->validation($request);

        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        $namespeciality= $specialty->name;
        
        $notification='La especialidad '.$namespeciality.' fue actualizada correctamente.';
        
        return redirect('/specialties')->with(compact('notification'));
    }

    //Elimina un registro con un id determinado.
    public function destroy(Specialty $specialty){
        $namespeciality = $specialty->name;
        
        $specialty->delete();
        
        $notification= 'La especialidad '.$namespeciality.' se elimino correctamente.';
        
        return redirect('/specialties')->with(compact('notification'));
    }
    
}
