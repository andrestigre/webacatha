<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Titulo</th><th>Contenido</th><th>Icono</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($itemsoporte as $item)
            <tr>
                <td>{{ $loop->iteration or $item->id }}</td>
                <td>{{ $item->titulo }}</td>
                <td>{{ $item->contenido }}</td>
                <td><i class="{{ $item->icono }}"></i></td>
                <td>
                    <a href="#" title="View Item soporte" class="btn btn-info btn-sm" onClick="VerItemSop('{{ $item->id }}')" data-toggle="modal" data-target="#viewItemsoporte">
                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="#" title="Edit Item soporte" class="btn btn-primary btn-sm" onClick="EditarItemSop('{{ $item->id }}')" 
                            data-toggle="modal" data-target="#updateItemsoporte">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                        </a>
                        <a href="#" title="Eliminar Item soporte" onClick="EliminarItemSop('{{ $item->id }}','{{ $item->item_soporte }}', '{{ $item->soporte_id }}')" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $itemsoporte->appends(['search' => Request::get('search')])->render() !!} </div>
    </div>