<div class="form-group {{ $errors->has('empresa') ? 'has-error' : ''}}">
    <label for="empresa" class="col-md-4 control-label">{{ 'Empresa' }}</label>
    <div class="col-md-6">
        {!! Form::text('empresa', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('empresa', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="col-md-4 control-label">{{ 'Descripción' }}</label>
    <div class="col-md-6">
        {!! Form::textarea('descripcion', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="col-md-4 control-label">{{ 'Telefono' }}</label>
    <div class="col-md-6">
        {!! Form::text('telefono', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
    <label for="logo" class="col-md-4 control-label">{{ 'Logo' }}</label>
    <div class="col-md-6">
        {!! Form::file('logo', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('representante') ? 'has-error' : ''}}">
    <label for="representante" class="col-md-4 control-label">{{ 'Representante' }}</label>
    <div class="col-md-6">
        {!! Form::text('representante', null, ['class' => 'form-control']) !!}
        {!! $errors->first('representante', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Crear' }}">
    </div>
</div>
