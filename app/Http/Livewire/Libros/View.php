<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libros;
use Livewire\Component;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public function render()
    {
        $libros = Libros::paginate(4);
        return view('livewire.libros.view',compact('libros'));
    }
}
