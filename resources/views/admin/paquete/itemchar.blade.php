<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Car Paquete</th><th>Estado</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($caracteristicapaquete as $item)
            <tr>
                <td>{{ $loop->iteration or $item->id }}</td>
                <td>{{ $item->car_paquete }}</td>
                <td>
                    @if(($item->estado)=='1')
                    <small class="label label-success">Activo</small>
                    @else
                    <small class="label label-danger">Inactivo</small>
                    @endif
                </td>
                <td>
                    <a href="#" title="View Caracteristica" class="btn btn-info btn-sm" onClick="VerItemChar('{{ $item->id }}')" data-toggle="modal" data-target="#viewItemCaracteristica">
                        <i class="fa fa-eye" aria-hidden="true"></i></a>

                        <a href="#" title="Edit Caracteristica" class="btn btn-primary btn-sm" onClick="EditarItemChar('{{ $item->id }}')" data-toggle="modal" data-target="#updateItemCaracteristica">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                        </a>

                        <a href="#" title="Eliminar Caracteristica" onClick="EliminarItemChar('{{ $item->id }}','{{ $item->car_paquete }}', '{{ $item->paquete_id }}')" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $caracteristicapaquete->appends(['search' => Request::get('search')])->render() !!} </div>
    </div>