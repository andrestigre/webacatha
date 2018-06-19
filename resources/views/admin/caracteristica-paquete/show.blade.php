@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">CaracteristicaPaquete {{ $caracteristicapaquete->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/caracteristica-paquete') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/caracteristica-paquete/' . $caracteristicapaquete->id . '/edit') }}" title="Edit CaracteristicaPaquete"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/caracteristicapaquete' . '/' . $caracteristicapaquete->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete CaracteristicaPaquete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $caracteristicapaquete->id }}</td>
                                    </tr>
                                    <tr><th> Car Paquete </th><td> {{ $caracteristicapaquete->car_paquete }} </td></tr><tr><th> Estado </th><td> {{ $caracteristicapaquete->estado }} </td></tr><tr><th> Paquete Id </th><td> {{ $caracteristicapaquete->paquete_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
