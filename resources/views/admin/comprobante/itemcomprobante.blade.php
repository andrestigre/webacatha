<div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Item Comprobante</th><th>Contenido</th><th>Efecto</th><th>Estado</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($itemcomprobante as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->item_comprobante }}</td><td>{{ $item->contenido }}</td><td>{{ $item->efecto }}</td>
                                         <td>
                    @if(($item->estado)=='1')
                                        <small class="label label-success">Activo</small>
                                        @else
                                        <small class="label label-danger">Inactivo</small>
                                        @endif
                </td>
                <td>
                    <a href="#" title="View Item comprobante" class="btn btn-info btn-sm" onClick="VerItemComp('{{ $item->id }}')" data-toggle="modal" data-target="#viewItemComprobante">
                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="#" title="Edit Item comprobante" class="btn btn-primary btn-sm" onClick="EditarItemComp('{{ $item->id }}')" data-toggle="modal" data-target="#updateItemComprobante">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                    </a>
                    <a href="#" title="Eliminar Item Comprobante" onClick="EliminarItemComp('{{ $item->id }}','{{ $item->item_comprobante }}', '{{ $item->comprobante_id }}')" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                    
                    
                </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $itemcomprobante->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>