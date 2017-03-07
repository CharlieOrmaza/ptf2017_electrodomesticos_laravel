<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto';

    public function guardar($data){
		
        $this->nombre = $data['nombre'];
        $this->email = $data['email'];
        $this->telefono = $data['telefono'];
        $this->mensaje = $data['mensaje'];
        $this->save();
    }
}
