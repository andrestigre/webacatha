@extends('adminlte::page')

@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="panel panel-default">
            @include('flash::message')
            <div class="panel-heading">Tipo Paquete</div>
            <div class="panel-body">
                <a href="{{ url('/admin/paquete/create') }}" class="btn btn-success btn-sm" title="Nuevo Paquete">
                    <i class="fa fa-plus" aria-hidden="true"></i> Nuevo
                </a>

                <form method="GET" action="{{ url('/admin/paquete') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>

                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th><th>Item Paquete</th><th>Detalle</th><th>Precio</th><th>Estado</th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($paquete as $item)
                            <tr>
                                <td>{{ $loop->iteration or $item->id }}</td>
                                <td>{{ $item->Tipopaquete->tipo_paquete }}</td>
                                <td>{!! $item->detalle !!}</td>
                                <td>{{ number_format($item->precio, 2) }}</td>
                                <td>
                                    @if(($item->estado)=='1')
                                    <small class="label label-success">Activo</small>
                                    @else
                                    <small class="label label-danger">Inactivo</small>
                                    @endif
                                </td>
                                <td>
                                    {{--
                                    <a href="{{ url('/admin/paquete/'. $item->id .'/addcharacteristic') }}" class="btn btn-success btn-sm" title="Nueva característica">
                                        <i class="fa fa-plus" aria-hidden="true"></i> ADD
                                    </a>
                                        --}}
                                    <a href="{{ url('/admin/paquete/' . $item->id) }}" title="Ver Paquete"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                    <a href="{{ url('/admin/paquete/' . $item->id . '/edit') }}" title="Editar Paquete"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                    <form method="POST" action="{{ url('/admin/paquete' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Paquete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $paquete->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
