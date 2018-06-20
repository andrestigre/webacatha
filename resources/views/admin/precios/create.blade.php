@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Precio</div>
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


                            {!! Form::open(['url' => '/admin/precios', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data' , 'files' => true, 'method'=>'POST', 'accept-charset'=>'UTFF-8']) !!}

                            @include ('admin.precios.form')

                        {!! Form::close() !!}
                        

                    </div>
                </div>
            </div>
        </div>
@endsection
