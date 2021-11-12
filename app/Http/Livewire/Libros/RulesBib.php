<?php

namespace App\Http\Livewire\Libros;

class RulesBib{
    public static function reglas(){
        return
        [
            'lib.titulo'=>'required',
            'lib.editorial'=>'required',
            'lib.autor'=>'required',
            'lib.fecha_lanzamiento'=>'required'
        ];
    }
}