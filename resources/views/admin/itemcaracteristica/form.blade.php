<div class="form-group {{ $errors->has('item_caracteristica') ? 'has-error' : ''}}">
    <label for="item_caracteristica" class="col-md-4 control-label">{{ 'Item Caracteristica' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="item_caracteristica" type="text" id="item_caracteristica" value="{{ $itemcaracteristica->item_caracteristica or ''}}" >
        {!! $errors->first('item_caracteristica', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('detalle') ? 'has-error' : ''}}">
    <label for="detalle" class="col-md-4 control-label">{{ 'Detalle' }}</label>
    <div class="col-md-6">
        {!! Form::textarea('detalle', null, ['class' => 'form-control ']) !!}       
        {!! $errors->first('detalle', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('iconuno') ? 'has-error' : ''}}">
    <label for="iconuno" class="col-md-4 control-label">{{ 'Iconuno' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="iconuno" type="text" id="iconuno" value="{{ $itemcaracteristica->iconuno or ''}}" >
        {!! $errors->first('iconuno', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('icondos') ? 'has-error' : ''}}">
    <label for="icondos" class="col-md-4 control-label">{{ 'Icondos' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="icondos" type="text" id="icondos" value="{{ $itemcaracteristica->icondos or ''}}" >
        {!! $errors->first('icondos', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('icontres') ? 'has-error' : ''}}">
    <label for="icontres" class="col-md-4 control-label">{{ 'Icontres' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="icontres" type="text" id="icontres" value="{{ $itemcaracteristica->icontres or ''}}" >
        {!! $errors->first('icontres', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('iconcuatro') ? 'has-error' : ''}}">
    <label for="iconcuatro" class="col-md-4 control-label">{{ 'Iconcuatro' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="iconcuatro" type="text" id="iconcuatro" value="{{ $itemcaracteristica->iconcuatro or ''}}" >
        {!! $errors->first('iconcuatro', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('iconcinco') ? 'has-error' : ''}}">
    <label for="iconcinco" class="col-md-4 control-label">{{ 'Iconcinco' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="iconcinco" type="text" id="iconcinco" value="{{ $itemcaracteristica->iconcinco or ''}}" >
        {!! $errors->first('iconcinco', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('iconseis') ? 'has-error' : ''}}">
    <label for="iconseis" class="col-md-4 control-label">{{ 'Iconseis' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="iconseis" type="text" id="iconseis" value="{{ $itemcaracteristica->iconseis or ''}}" >
        {!! $errors->first('iconseis', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="estado" type="radio" value="1" {{ (isset($itemcaracteristica) && 1 == $itemcaracteristica->estado) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="estado" type="radio" value="0" @if (isset($itemcaracteristica)) {{ (0 == $itemcaracteristica->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('caracteristica_id') ? 'has-error' : ''}}">
    <label for="caracteristica_id" class="col-md-4 control-label">{{ 'Caracteristica Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="caracteristica_id" type="number" id="caracteristica_id" value="{{ $itemcaracteristica->caracteristica_id or ''}}" >
        {!! $errors->first('caracteristica_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
