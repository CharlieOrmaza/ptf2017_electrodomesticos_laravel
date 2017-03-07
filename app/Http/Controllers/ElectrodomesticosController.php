<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Producto;
use App\Contacto;

class ElectrodomesticosController extends Controller
{
    public function listar()
    {

    	$datos = [
    		'productos' => Producto::all(),
    		'sobreNosotros' => 'Somos una empresa especializada en los electrodomesticos, con sucursales en varios puntos de la provincia de buenos aires, y con los precios mas accesibles.'
    	];
        return view('producto.home', ['datos' => $datos]);
    }

    public function guardar(Request $request)
	{

		$messages = [
		    'email' => 'El campo :attribute debe tener formato de email, con @ y .com'
		];
		
		$rules = [ 
				'nombre' => 'required',
				'email' => 'required',
				'telefono' => 'required',
				'mensaje' => 'required'
		];
		
		$validator = Validator::make ( $request->all (), $rules, $messages );
		
		if ($validator->fails ()) {
			return redirect()->back()->withErrors($validator->errors());
		}

		$data = $request->all();
		$contacto = new Contacto();
		$contacto->guardar($data);
		
		return redirect('/');

	}

	public function listarContactos()
    {

    	$datos = [
    		'contactos' => Contacto::all(),
    	];
        return view('contacto.lista', ['datos' => $datos]);
    }
}
