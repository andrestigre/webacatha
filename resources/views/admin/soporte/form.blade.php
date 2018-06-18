<div class="form-group {{ $errors->has('itemnav_id') ? 'has-error' : ''}}">
    <label for="itemnav_id" class="col-md-4 control-label">{{ 'Item Nav' }}</label>
    <div class="col-md-6">
        {!! Form::select('itemnav_id', $itemsnav, null, ['class' => 'form-control','id'=>'itemnav_id']) !!}        
        {!! $errors->first('itemnav_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="col-md-4 control-label">{{ 'Intro' }}</label>
    <div class="col-md-6">
        {!! Form::text('titulo', null, ['class' => 'form-control ckeditor']) !!}
        {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('detalle') ? 'has-error' : ''}}">
    <label for="detalle" class="col-md-4 control-label">{{ 'Detalle' }}</label>
    <div class="col-md-6">
        <textarea class="form-control ckeditor" rows="5" name="detalle" type="textarea" id="detalle" required>{{ $soporte->detalle or ''}}</textarea>
        {!! $errors->first('detalle', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('section_color') ? 'has-error' : ''}}">
    <label for="section_color" class="col-md-4 control-label">{{ 'Section Color' }}</label>
    <div class="col-md-6">
        <select name="section_color" class="form-control" id="section_color" >
    @foreach (json_decode('{"gray-section":"Gray","white":"White"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($soporte->section_color) && $soporte->section_color == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('section_color', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('activo') ? 'has-error' : ''}}">
    <label for="activo" class="col-md-4 control-label">{{ 'Activo' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="activo" type="radio" value="1" {{ (isset($soporte) && 1 == $soporte->activo) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="activo" type="radio" value="0" @if (isset($soporte)) {{ (0 == $soporte->activo) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('enlace') ? 'has-error' : ''}}">
    <label for="enlace" class="col-md-4 control-label">{{ 'Enlace' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="enlace" type="text" id="enlace" value="{{ $soporte->enlace or ''}}" >
        {!! $errors->first('enlace', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tituloenlace') ? 'has-error' : ''}}">
    <label for="tituloenlace" class="col-md-4 control-label">{{ 'Titulo Enlace' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tituloenlace" type="text" id="tituloenlace" value="{{ $soporte->tituloenlace or ''}}" >
        {!! $errors->first('tituloenlace', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('titulofinal') ? 'has-error' : ''}}">
    <label for="titulofinal" class="col-md-4 control-label">{{ 'Titulofinal' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="titulofinal" type="textarea" id="titulofinal" >{{ $soporte->titulofinal or ''}}</textarea>
        {!! $errors->first('titulofinal', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Crear' }}">
    </div>
</div>
