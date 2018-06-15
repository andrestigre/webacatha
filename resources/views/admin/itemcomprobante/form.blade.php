<div class="form-group {{ $errors->has('item_comprobante') ? 'has-error' : ''}}">
    <label for="item_comprobante" class="col-md-4 control-label">{{ 'Item Comprobante' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="item_comprobante" type="text" id="item_comprobante" value="{{ $itemcomprobante->item_comprobante or ''}}" >
        {!! $errors->first('item_comprobante', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
    <label for="contenido" class="col-md-4 control-label">{{ 'Contenido' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="contenido" type="textarea" id="contenido" >{{ $itemcomprobante->contenido or ''}}</textarea>
        {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('efecto') ? 'has-error' : ''}}">
    <label for="efecto" class="col-md-4 control-label">{{ 'Efecto' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="efecto" type="text" id="efecto" value="{{ $itemcomprobante->efecto or ''}}" >
        {!! $errors->first('efecto', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="estado" type="radio" value="1" {{ (isset($itemcomprobante) && 1 == $itemcomprobante->estado) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="estado" type="radio" value="0" @if (isset($itemcomprobante)) {{ (0 == $itemcomprobante->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('comprobante_id') ? 'has-error' : ''}}">
    <label for="comprobante_id" class="col-md-4 control-label">{{ 'Comprobante Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="comprobante_id" type="number" id="comprobante_id" value="{{ $itemcomprobante->comprobante_id or ''}}" >
        {!! $errors->first('comprobante_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
