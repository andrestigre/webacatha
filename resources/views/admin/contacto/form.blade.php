<div class="form-group {{ $errors->has('itemnav_id') ? 'has-error' : ''}}">
    <label for="itemnav_id" class="col-md-4 control-label">{{ 'Itemnav Id' }}</label>
    <div class="col-md-6">
        {!! Form::select('itemnav_id', $itemsnav, null, ['class' => 'form-control','id'=>'itemnav_id']) !!}        

        {!! $errors->first('itemnav_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="col-md-4 control-label">{{ 'Titulo' }}</label>
    <div class="col-md-6">
        {!! Form::textarea('titulo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
    <label for="contenido" class="col-md-4 control-label">{{ 'Contenido' }}</label>
    <div class="col-md-6">
        {!! Form::textarea('contenido', null, ['class' => 'form-control ckeditor']) !!}
        {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('enlaceboton') ? 'has-error' : ''}}">
    <label for="enlaceboton" class="col-md-4 control-label">{{ 'Enlace boton' }}</label>
    <div class="col-md-6">
        {!! Form::text('enlaceboton', null, ['class' => 'form-control']) !!}
        {!! $errors->first('enlaceboton', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('textoboton') ? 'has-error' : ''}}">
    <label for="textoboton" class="col-md-4 control-label">{{ 'Texto boton' }}</label>
    <div class="col-md-6">
        {!! Form::text('textoboton', null, ['class' => 'form-control']) !!}
        {!! $errors->first('textoboton', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="estado" type="radio" value="1" {{ (isset($contacto) && 1 == $contacto->estado) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="estado" type="radio" value="0" @if (isset($contacto)) {{ (0 == $contacto->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('social_fb') ? 'has-error' : ''}}">
    <label for="social_fb" class="col-md-4 control-label">{{ 'Social Fb' }}</label>
    <div class="col-md-6">
        {!! Form::text('social_fb', null, ['class' => 'form-control']) !!}
        {!! $errors->first('social_fb', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('social_tw') ? 'has-error' : ''}}">
    <label for="social_tw" class="col-md-4 control-label">{{ 'Social Tw' }}</label>
    <div class="col-md-6">
        {!! Form::text('social_tw', null, ['class' => 'form-control']) !!}
        {!! $errors->first('social_tw', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('social_gg') ? 'has-error' : ''}}">
    <label for="social_gg" class="col-md-4 control-label">{{ 'Social Gg' }}</label>
    <div class="col-md-6">
        {!! Form::text('social_gg', null, ['class' => 'form-control']) !!}
        {!! $errors->first('social_gg', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('social_in') ? 'has-error' : ''}}">
    <label for="social_in" class="col-md-4 control-label">{{ 'Social In' }}</label>
    <div class="col-md-6">
        {!! Form::text('social_in', null, ['class' => 'form-control']) !!}
        {!! $errors->first('social_in', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('latitud') ? 'has-error' : ''}}">
    <label for="latitud" class="col-md-4 control-label">{{ 'Latitud' }}</label>
    <div class="col-md-6">
        {!! Form::text('latitud', null, ['class' => 'form-control']) !!}
        {!! $errors->first('latitud', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('longitud') ? 'has-error' : ''}}">
    <label for="longitud" class="col-md-4 control-label">{{ 'Longitud' }}</label>
    <div class="col-md-6">
        {!! Form::text('longitud', null, ['class' => 'form-control']) !!}
        {!! $errors->first('longitud', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('section_color') ? 'has-error' : ''}}">
    <label for="section_color" class="col-md-4 control-label">{{ 'Section Color' }}</label>
    <div class="col-md-6">
        <select name="section_color" class="form-control" id="section_color" >
    @foreach (json_decode('{"gray-section":"Gray","white":"White"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($contacto->section_color) && $contacto->section_color == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('section_color', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Crear' }}">
    </div>
</div>
