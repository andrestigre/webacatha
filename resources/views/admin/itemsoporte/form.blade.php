<div class="form-group {{ $errors->has('item_soporte') ? 'has-error' : ''}}">
    <label for="item_soporte" class="col-md-4 control-label">{{ 'Item Soporte' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="item_soporte" type="text" id="item_soporte" value="{{ $itemsoporte->item_soporte or ''}}" >
        {!! $errors->first('item_soporte', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="col-md-4 control-label">{{ 'Titulo' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="titulo" type="textarea" id="titulo" >{{ $itemsoporte->titulo or ''}}</textarea>
        {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
    <label for="contenido" class="col-md-4 control-label">{{ 'Contenido' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="contenido" type="textarea" id="contenido" >{{ $itemsoporte->contenido or ''}}</textarea>
        {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('enlace') ? 'has-error' : ''}}">
    <label for="enlace" class="col-md-4 control-label">{{ 'Enlace' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="enlace" type="textarea" id="enlace" >{{ $itemsoporte->enlace or ''}}</textarea>
        {!! $errors->first('enlace', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('icono') ? 'has-error' : ''}}">
    <label for="icono" class="col-md-4 control-label">{{ 'Icono' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="icono" type="textarea" id="icono" >{{ $itemsoporte->icono or ''}}</textarea>
        {!! $errors->first('icono', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tituloanexo') ? 'has-error' : ''}}">
    <label for="tituloanexo" class="col-md-4 control-label">{{ 'Tituloanexo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tituloanexo" type="text" id="tituloanexo" value="{{ $itemsoporte->tituloanexo or ''}}" >
        {!! $errors->first('tituloanexo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('textoanexo') ? 'has-error' : ''}}">
    <label for="textoanexo" class="col-md-4 control-label">{{ 'Textoanexo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="textoanexo" type="text" id="textoanexo" value="{{ $itemsoporte->textoanexo or ''}}" >
        {!! $errors->first('textoanexo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="estado" type="radio" value="1" {{ (isset($itemsoporte) && 1 == $itemsoporte->estado) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="estado" type="radio" value="0" @if (isset($itemsoporte)) {{ (0 == $itemsoporte->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('soporte_id') ? 'has-error' : ''}}">
    <label for="soporte_id" class="col-md-4 control-label">{{ 'Soporte Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="soporte_id" type="number" id="soporte_id" value="{{ $itemsoporte->soporte_id or ''}}" >
        {!! $errors->first('soporte_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
