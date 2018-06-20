@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">

                <div id="notifiitemcrt"></div>

                <div class="panel panel-default">
                    <div class="panel-heading">Editar Paquete #{{ $paquete->Tipopaquete->tipo_paquete }}</div>
                    <input type="hidden" name="paquete_id" id="paquete_id" value="{{ $paquete->id }}">

                    <div class="panel-body">
                        <a href="{{ url('/admin/paquete') }}" title="Atras"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>

                        <a href="#" title="Add Característica"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createItemCaracteristica"><i class="fa fa-plus" aria-hidden="true"></i> Add Característica</button></a>

                <a href="#" title="Ver Característica"><button id="btn_veritemchar" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver Características</button></a>

                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif


                            {!! Form::model($paquete, [
                    'method' => 'PATCH',
                    'url' => ['/admin/paquete', $paquete->id],
                    'class' => 'form-horizontal',
                    'files' => true
                    ]) !!}

                            @include ('admin.paquete.form', ['submitButtonText' => 'Actualizar'])

                            <div id="listitemspaquete">


                            </div>

                        {!! Form::close() !!}
                        
                    </div>
                </div>
            </div>
        </div>


    @include('admin.paquete.modal')

    

@endsection
