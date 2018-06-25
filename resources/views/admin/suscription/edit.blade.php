@extends('adminlte::page')

@section('content')

<div class="row">
    
    <div class="col-md-12">

                <div id="notifiitemcrt"></div>
        
        <div class="panel panel-default">
            <div class="panel-heading">Edit Suscription #{{ $suscription->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/suscription') }}" title="Atras"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        

                            {!! Form::model($suscription, [
                    'method' => 'PATCH',
                    'url' => ['/admin/suscription', $suscription->id],
                    'class' => 'form-horizontal',
                    'files' => true
                    ]) !!}

                            @include ('admin.suscription.form', ['submitButtonText' => 'Actualizar'])

                    {!! Form::close() !!}
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
