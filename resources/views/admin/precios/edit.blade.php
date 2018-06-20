@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Precio #{{ $precio->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/precios') }}" title="Atras"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif


                            {!! Form::model($precio, [
                        'method' => 'PATCH',
                        'url' => ['/admin/precios', $precio->id],
                        'class' => 'form-horizontal',
                        'files' => true
                        ]) !!}

                            @include ('admin.precios.form', ['submitButtonText' => 'Actualizar'])

                        {!! Form::close() !!}
                        

                    </div>
                </div>
            </div>
        </div>
@endsection
