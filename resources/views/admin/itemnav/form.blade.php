<div class="form-group {{ $errors->has('item_nav') ? 'has-error' : ''}}">
    <label for="item_nav" class="col-md-4 control-label">{{ 'Item Nav' }}</label>
    <div class="col-md-6">
        {!! Form::text('item_nav', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('item_nav', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('enlace') ? 'has-error' : ''}}">
    <label for="enlace" class="col-md-4 control-label">{{ 'Enlace' }}</label>
    <div class="col-md-6">
        {!! Form::text('enlace', null, ['class' => 'form-control', 'required' => 'required']) !!}        
        {!! $errors->first('enlace', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
    <label for="contenido" class="col-md-4 control-label">{{ 'Contenido' }}</label>
    <div class="col-md-6">
        {!! Form::textarea('contenido', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estilo') ? 'has-error' : ''}}">
    <label for="estilo" class="col-md-4 control-label">{{ 'Estilo' }}</label>
    <div class="col-md-6">
        {!! Form::textarea('estilo', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('estilo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('activo') ? 'has-error' : ''}}">
    <label for="activo" class="col-md-4 control-label">{{ 'Activo' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="activo" type="radio" value="1" {{ (isset($itemnav) && 1 == $itemnav->activo) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="activo" type="radio" value="0" @if (isset($itemnav)) {{ (0 == $itemnav->activo) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Crear' }}">
    </div>
</div>
