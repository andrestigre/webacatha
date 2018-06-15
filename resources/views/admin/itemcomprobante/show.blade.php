@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Itemcomprobante {{ $itemcomprobante->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/itemcomprobante') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/itemcomprobante/' . $itemcomprobante->id . '/edit') }}" title="Edit Itemcomprobante"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/itemcomprobante' . '/' . $itemcomprobante->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Itemcomprobante" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $itemcomprobante->id }}</td>
                                    </tr>
                                    <tr><th> Item Comprobante </th><td> {{ $itemcomprobante->item_comprobante }} </td></tr><tr><th> Contenido </th><td> {{ $itemcomprobante->contenido }} </td></tr><tr><th> Efecto </th><td> {{ $itemcomprobante->efecto }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
