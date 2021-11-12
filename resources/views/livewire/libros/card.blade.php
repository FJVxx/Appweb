<div class="row ">
            <div class="col-7 mx-auto">  
                    <div class="form-group">
                        <label>Titulo</label>
                        <input wire:model="lib.titulo" type="text" class="form-control">
                        @error('lib.titulo') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                                    
                    <div class="form-group">
                        <label>Editorial</label>
                        <input wire:model="lib.editorial" type="text" class="form-control">
                        @error('lib.editorial') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                                    
                    <div class="form-group">
                        <label>Autor</label>
                        <input wire:model="lib.autor" type="text" class="form-control">
                        @error('lib.autor') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                                    
                    <div class="form-group">
                        <label>Fecha de lanzamiento</label>
                        <input wire:model="lib.fecha_lanzamiento" type="date" class="form-control">
                        @error('lib.fecha_lanzamiento') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
            </div>
</div>