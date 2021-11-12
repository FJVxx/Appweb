<div>
<table class="table table-striped">
    <thead style= "background-color: #A45A9B;">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Editorial</th>
            <th scope="col">Autor</th>
            <th scope="col">Fecha de Lanzamiento</th>
            <th scope="#"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($libros as $lib)
            <tr>
                <th scope="row">{{$lib->id}}</th>
                <td>{{$lib->titulo}}</td>
                <td>{{$lib->editorial}}</td>
                <td>{{$lib->autor}}</td>
                <td>{{$lib->fecha_lanzamiento}}</td>
                <!-- Recolectar y mandar valores -->

                <td>
                    <a href="{{route('libros.create')}}" title="Registrar entrada" 
                    class="btn-sm btn btn-success"><i class="fa fa-atlas"></i></a>
                    <a href="{{route('libros.update', $lib)}}" title="Editar Curso"
                    class="btn-sm btn btn-info"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
    {{$libros->links()}}
</div>
