@extends('adminlte::page')

@section('content')

<div class="row">
    
    <div class="col-md-12">

                <div id="notifiitemcrt"></div>
        
        <div class="panel panel-default">
            <div class="panel-heading">Editar Caracteristica #{{ $caracteristica->Itemnav->item_nav }}</div>
            <div class="panel-body">
                <a href="{{ url('/admin/caracteristica') }}" title="Atras"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                <a href="#" title="Add Item"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createItemCaracteristica"><i class="fa fa-plus" aria-hidden="true"></i> Add Item Características</button></a>
                <a href="#" title="Ver Items Caracteristicas"><button id="btn_veritemcrt" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver Items Características</button></a>
                <br />
                <br />

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif


                {!! Form::model($caracteristica, [
                    'method' => 'PATCH',
                    'url' => ['/admin/caracteristica', $caracteristica->id],
                    'class' => 'form-horizontal',
                    'files' => true
                    ]) !!}

                    @include ('admin.caracteristica.form', ['submitButtonText' => 'Actualizar'])

                    <div id="listitemscaracteristicas">

                    

                    </div>


                    {!! Form::close() !!}


                    


                </div>
            </div>
        </div>
    </div>


    @include('admin.caracteristica.modal')

@endsection
