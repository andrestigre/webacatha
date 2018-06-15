@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Itemcaracteristica {{ $itemcaracteristica->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/itemcaracteristica') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/itemcaracteristica/' . $itemcaracteristica->id . '/edit') }}" title="Edit Itemcaracteristica"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/itemcaracteristica' . '/' . $itemcaracteristica->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Itemcaracteristica" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $itemcaracteristica->id }}</td>
                                    </tr>
                                    <tr><th> Item Caracteristica </th><td> {{ $itemcaracteristica->item_caracteristica }} </td></tr><tr><th> Detalle </th><td> {{ $itemcaracteristica->detalle }} </td></tr><tr><th> Iconuno </th><td> {{ $itemcaracteristica->iconuno }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
