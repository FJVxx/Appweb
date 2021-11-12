<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libros;
use Livewire\Component;

class Update extends Component
{
    public Libros $lib;
    public function render()
    {
        return view('livewire.libros.update');
    }
    public function update(){

        $this->validate();
        $this->lib->save();
        return redirect(route('libros.view'));

    }
    protected function rules(){
        return RulesBib::reglas();
    }
}
