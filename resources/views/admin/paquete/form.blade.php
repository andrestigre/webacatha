<div class="form-group {{ $errors->has('tipopaquete_id') ? 'has-error' : ''}}">
    <label for="tipopaquete_id" class="col-md-4 control-label">{{ 'Tipo paquete' }}</label>
    <div class="col-md-6">
        {!! Form::select('tipopaquete_id', $tipospaquetes, null, ['class' => 'form-control','id'=>'tipopaquete_id']) !!} 
        {!! $errors->first('tipopaquete_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('detalle') ? 'has-error' : ''}}">
    <label for="detalle" class="col-md-4 control-label">{{ 'Detalle' }}</label>
    <div class="col-md-6">
         {!! Form::textarea('detalle', null, ['class' => 'form-control ckeditor']) !!}  
        {!! $errors->first('detalle', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="col-md-4 control-label">{{ 'Precio' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="precio" type="text" id="precio" value="{{ $paquete->precio or ''}}" >
        {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('periodo') ? 'has-error' : ''}}">
    <label for="periodo" class="col-md-4 control-label">{{ 'Período' }}</label>
    <div class="col-md-6">
        {!! Form::text('periodo', null, ['class' => 'form-control']) !!}                
        {!! $errors->first('periodo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="estado" type="radio" value="1" {{ (isset($paquete) && 1 == $paquete->estado) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="estado" type="radio" value="0" @if (isset($paquete)) {{ (0 == $paquete->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Crear' }}">
    </div>
</div>
