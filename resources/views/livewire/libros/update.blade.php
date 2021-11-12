<div>
    <form wire:submit.prevent="update">
        <div class="text-justify card" style= "background-color: #78C0C0;">
            <div class="font-weight-bold card-header">
                Modificar datos
            </div>
            <div class="card-body">
                 @include('livewire.libros.card')
            </div>
            <div class="card-footer text-muted">
                <button class="btn-sm btn btn-success"><i class="fa fa-edit"></i> Modificar</button>
                <a href="{{route('libros.view')}}" class="btn btn-primary btn-sm">Cancelar</a>  
            </div>
        </div>

    </form>
</div>
