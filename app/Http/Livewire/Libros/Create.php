<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libros;
use Livewire\Component;

class Create extends Component
{
    public function mount(){
        $this->lib = new Libros();
    }
    public function render()
    {
        return view('livewire.libros.create');
    }
    
    public function crear(){
        $this->validate();
        $this->lib->save();
        return redirect(route('libros.view'));

    }
    
    protected function rules(){
        return RulesBib::reglas();
    }
}
