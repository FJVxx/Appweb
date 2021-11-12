<div>
    <form wire:submit.prevent="crear"> 
        <div class="text-justify card" style= "background-color: #A45A9B;">
            <div class="font-weight-bold card-header">
                Create User
            </div>
            <div class="card-body">
                 @include('livewire.libros.card')
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-success btn-sm"><i class="fa fa-save"></i> Create</button>
                <a href="{{route('libros.view')}}" class="btn btn-primary btn-sm">Cancelar</a>  
            </div>
        </div>

    </form>      
</div>
