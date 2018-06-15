@extends('adminlte::page')

@section('content')

<div class="row">
    
    <div class="col-md-12">

                <div id="notifiitemcrt"></div>
        
        <div class="panel panel-default">
            <div class="panel-heading">Editar Comprobante #{{ $comprobante->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/comprobante') }}" title="Atras"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>

                        <a href="#" title="Add Item Comprobante"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createItemComprobante"><i class="fa fa-plus" aria-hidden="true"></i> Add Item Comprobante</button></a>

                <a href="#" title="Ver Items Comprobante"><button id="btn_veritemcomp" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver Items Comprobantes</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif


                            {!! Form::model($comprobante, [
                    'method' => 'PATCH',
                    'url' => ['/admin/comprobante', $comprobante->id],
                    'class' => 'form-horizontal',
                    'files' => true
                    ]) !!}

                            @include ('admin.comprobante.form', ['submitButtonText' => 'Actualizar'])

                            <div id="listitemscomprobantes">

                    

                            </div>

                        {!! Form::close() !!}

                   
                </div>
            </div>
        </div>
    </div>

    @include('admin.comprobante.modal')

@endsection
