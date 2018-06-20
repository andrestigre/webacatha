<div class="form-group {{ $errors->has('item_nav') ? 'has-error' : ''}}">
    <label for="item_nav" class="col-md-4 control-label">{{ 'Item Nav' }}</label>
    <div class="col-md-6">
        {!! Form::select('itemnav_id', $itemsnav, null, ['class' => 'form-control','id'=>'itemnav_id']) !!}        
        {!! $errors->first('item_nav', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
    <label for="contenido" class="col-md-4 control-label">{{ 'Contenido' }}</label>
    <div class="col-md-6">
        {!! Form::textarea('contenido', null, ['class' => 'form-control ckeditor']) !!}        
        {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('section_color') ? 'has-error' : ''}}">
    <label for="section_color" class="col-md-4 control-label">{{ 'Section Color' }}</label>
    <div class="col-md-6">
        <select name="section_color" class="form-control" id="section_color" >
    @foreach (json_decode('{"gray-section":"Gray","white":"White"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($precio->section_color) && $precio->section_color == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('section_color', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('activo') ? 'has-error' : ''}}">
    <label for="activo" class="col-md-4 control-label">{{ 'Activo' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="activo" type="radio" value="0" {{ (isset($precio) && 0 == $precio->activo) ? 'checked' : '' }}> No</label>
</div>
<div class="radio">
    <label><input name="activo" type="radio" value="1" @if (isset($precio)) {{ (1 == $precio->activo) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
        {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('enlace') ? 'has-error' : ''}}">
    <label for="enlace" class="col-md-4 control-label">{{ 'Enlace' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="enlace" type="text" id="enlace" value="{{ $precio->enlace or ''}}" >
        {!! $errors->first('enlace', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Crear' }}">
    </div>
</div>
