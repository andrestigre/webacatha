@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    @include('flash::message')
                    <div class="panel-heading">Review Invoice {{ $reviewinvoice->title }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/review-invoice') }}" title="Atras"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/review-invoice/' . $reviewinvoice->id . '/edit') }}" title="Editar ReviewInvoice"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('admin/reviewinvoice' . '/' . $reviewinvoice->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete ReviewInvoice" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Elimar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $reviewinvoice->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Title </th><td> {{ $reviewinvoice->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> Price </th><td> {{ $reviewinvoice->price }} </td>
                                    </tr>
                                    <tr>
                                        <th> Estado </th><td> {{ $reviewinvoice->payment_status }} </td>
                                    </tr>
                                    <tr>
                                        <th> Pack </th><td> {{ $reviewinvoice->pack }} </td>
                                    </tr>
                                    <tr>
                                        <th> Detalle </th><td> {{ $reviewinvoice->detall }} </td>
                                    </tr>
                                    <tr>
                                        <th> Periodo </th><td> {{ $reviewinvoice->periodo }} </td>
                                    </tr>
                                    <tr>
                                        <th> Cliente </th><td> {{ $reviewinvoice->cli_nombre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th><td> {{ $reviewinvoice->cli_email }} </td>
                                    </tr>
                                    <tr>
                                        <th> Contacto </th><td> {{ $reviewinvoice->cli_contacto }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
