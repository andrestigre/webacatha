<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Item Caracteristica</th><th>Detalle</th><th>Icons</th><th>Estado</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($itemcaracteristica as $item)
            <tr>
                <td>{{ $loop->iteration or $item->id }}</td>
                <td>{{ $item->item_caracteristica }}</td>
                <td>{{ $item->detalle }}</td>
                <td>
                    <i class="{{ $item->iconuno }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="{{ $item->icondos }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="{{ $item->icontres }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="{{ $item->iconcuatro }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="{{ $item->iconcinco }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="{{ $item->iconseis }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    @if(($item->estado)=='1')
                                        <small class="label label-success">Activo</small>
                                        @else
                                        <small class="label label-danger">Inactivo</small>
                                        @endif
                </td>
                <td>
                    <a href="#" title="View Itemcaracteristica" class="btn btn-info btn-sm" onClick="VerItemCrt('{{ $item->id }}')" data-toggle="modal" data-target="#viewItemCaracteristica">
                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="#" title="Edit Itemcaracteristica" class="btn btn-primary btn-sm" onClick="EditarItemCrt('{{ $item->id }}')" data-toggle="modal" data-target="#updateItemCaracteristica">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                    </a>
                    <a href="#" title="Eliminar Itemcaracteristica" onClick="EliminarItemCrt('{{ $item->id }}','{{ $item->item_caracteristica }}', '{{ $item->caracteristica_id }}')" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                    
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $itemcaracteristica->appends(['search' => Request::get('search')])->render() !!} </div>
</div>