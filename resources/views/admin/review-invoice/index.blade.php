@extends('adminlte::page')

@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="panel panel-default">
            @include('flash::message')
            <div class="panel-heading">Review Invoice</div>
                    <div class="panel-body">
                        

                        <form method="GET" action="{{ url('/admin/review-invoice') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                        <th>#</th>
                                        <th>Pack</th>
                                        <th>Detalle</th>
                                        <th>Estado</th>
                                        <th>Cliente</th>
                                        <th>Contacto</th>
                                        <th>Correo</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($reviewinvoice as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->detall }}</td>
                                        <td>{{ $item->payment_status }}</td>
                                        <td>{{ $item->cli_nombre }}</td>
                                        <td>{{ $item->cli_email }}</td>
                                        <td>{{ $item->cli_contacto }}</td>
                                        <td>
                                            <a href="{{ url('/admin/review-invoice/' . $item->id) }}" title="Ver ReviewInvoice"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/review-invoice/' . $item->id . '/edit') }}" title="Editar ReviewInvoice"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/admin/review-invoice' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete ReviewInvoice" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $reviewinvoice->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
