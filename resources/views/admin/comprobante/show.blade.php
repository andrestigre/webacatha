@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Comprobante {{ $comprobante->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/comprobante') }}" title="Atras"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/comprobante/' . $comprobante->id . '/edit') }}" title="Edit Comprobante"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/comprobante' . '/' . $comprobante->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Comprobante" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $comprobante->id }}</td>
                                    </tr>
                                    <tr><th> Item Nav </th><td> {{ $comprobante->item_nav }} </td></tr><tr><th> Detalle </th><td> {{ $comprobante->detalle }} </td></tr><tr><th> Contenido </th><td> {{ $comprobante->contenido }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
