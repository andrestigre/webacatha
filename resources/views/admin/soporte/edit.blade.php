@extends('adminlte::page')

@section('content')

<div class="row">
    
    <div class="col-md-12">

        <div id="notifiitemcrt"></div>
        
        <div class="panel panel-default">
            <div class="panel-heading">Editar Soporte #{{ $soporte->id }}</div>
            <input class="form-control" name="soporte_idprincipal" type="hidden" id="soporte_idprincipal" value="{{ $soporte->id }}" >

            <div class="panel-body">
                <a href="{{ url('/admin/soporte') }}" title="Atras">
                    <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>

                    <a href="#" title="Add Item Soporte"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createItemSoporte"><i class="fa fa-plus" aria-hidden="true"></i> Add Item Soporte</button></a>

                    <a href="#" title="Ver Items Soporte"><button id="btn_veritemsop" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver Items Soporte</button></a>

                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    

                    {!! Form::model($soporte, [
                        'method' => 'PATCH',
                        'url' => ['/admin/soporte', $soporte->id],
                        'class' => 'form-horizontal',
                        'files' => true
                        ]) !!}

                        @include ('admin.soporte.form', ['submitButtonText' => 'Actualizar'])

                        <div id="listitemssoportes">

                            

                        </div>

                        {!! Form::close() !!}
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.soporte.modal')


    @endsection
