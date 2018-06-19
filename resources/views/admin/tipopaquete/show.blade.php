@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    @include('flash::message')
                    <div class="panel-heading">Tipo Paquete {{ $tipopaquete->tipo_paquete }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/tipopaquete') }}" title="Atras"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/tipopaquete/' . $tipopaquete->id . '/edit') }}" title="Editar Tipopaquete"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('admin/tipopaquete' . '/' . $tipopaquete->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Tipopaquete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tipopaquete->id }}</td>
                                    </tr>
                                    <tr><th> Tipo Paquete </th><td> {{ $tipopaquete->tipo_paquete }} </td></tr>
                                    <tr><th> Detalle </th><td> {{ $tipopaquete->detalle }} </td></tr>
                                    <tr><th> Enlace </th><td> {{ $tipopaquete->enlace }} </td></tr>
                                    <tr><th> Titulo Enlace </th><td> {{ $tipopaquete->totuloenlace }} </td></tr>
                                    <tr><th> Estado </th><td> 
                                    @if(($tipopaquete->activo)=='1')
                                    <small class="label label-success">Activo</small>
                                    @else
                                    <small class="label label-danger">Inactivo</small>
                                    @endif
                                </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
