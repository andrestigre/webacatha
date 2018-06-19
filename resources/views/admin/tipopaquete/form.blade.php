<div class="form-group {{ $errors->has('tipo_paquete') ? 'has-error' : ''}}">
    <label for="tipo_paquete" class="col-md-4 control-label">{{ 'Tipo Paquete' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tipo_paquete" type="text" id="tipo_paquete" value="{{ $tipopaquete->tipo_paquete or ''}}" required>
        {!! $errors->first('tipo_paquete', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('detalle') ? 'has-error' : ''}}">
    <label for="detalle" class="col-md-4 control-label">{{ 'Detalle' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="detalle" type="textarea" id="detalle" required>{{ $tipopaquete->detalle or ''}}</textarea>
        {!! $errors->first('detalle', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('enlace') ? 'has-error' : ''}}">
    <label for="enlace" class="col-md-4 control-label">{{ 'Enlace' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="enlace" type="textarea" id="enlace" >{{ $tipopaquete->enlace or ''}}</textarea>
        {!! $errors->first('enlace', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('totuloenlace') ? 'has-error' : ''}}">
    <label for="totuloenlace" class="col-md-4 control-label">{{ 'Totulo enlace' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="totuloenlace" type="textarea" id="totuloenlace" >{{ $tipopaquete->totuloenlace or ''}}</textarea>
        {!! $errors->first('totuloenlace', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('activo') ? 'has-error' : ''}}">
    <label for="activo" class="col-md-4 control-label">{{ 'Activo' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="activo" type="radio" value="1" {{ (isset($tipopaquete) && 1 == $tipopaquete->activo) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="activo" type="radio" value="0" @if (isset($tipopaquete)) {{ (0 == $tipopaquete->activo) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Crear' }}">
    </div>
</div>
