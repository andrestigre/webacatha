<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="col-md-4 control-label">{{ 'Título' }}</label>
    <div class="col-md-6">
        {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('itemuno') ? 'has-error' : ''}}">
    <label for="itemuno" class="col-md-4 control-label">{{ 'Item 1' }}</label>
    <div class="col-md-6">
        {!! Form::text('itemuno', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('itemuno', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('itemdos') ? 'has-error' : ''}}">
    <label for="itemdos" class="col-md-4 control-label">{{ 'Item 2' }}</label>
    <div class="col-md-6">
        {!! Form::text('itemdos', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('itemdos', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('itemtres') ? 'has-error' : ''}}">
    <label for="itemtres" class="col-md-4 control-label">{{ 'Item 3' }}</label>
    <div class="col-md-6">
        {!! Form::text('itemtres', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('itemtres', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('itemcuatro') ? 'has-error' : ''}}">
    <label for="itemcuatro" class="col-md-4 control-label">{{ 'Item 4' }}</label>
    <div class="col-md-6">
        {!! Form::text('itemcuatro', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('itemcuatro', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('detalle') ? 'has-error' : ''}}">
    <label for="detalle" class="col-md-4 control-label">{{ 'Detalle' }}</label>
    <div class="col-md-6">
        {!! Form::textarea('detalle', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('detalle', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('imagen') ? 'has-error' : ''}}">
    <label for="imagen" class="col-md-4 control-label">{{ 'Imagen' }}</label>
    <div class="col-md-6">
        {!! Form::file('imagen', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('imagen', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('video_background') ? 'has-error' : ''}}">
    <label for="video_background" class="col-md-4 control-label">{{ 'Video Background' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="video_background" type="radio" value="1" {{ (isset($slider) && 1 == $slider->video_background) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="video_background" type="radio" value="0" @if (isset($slider)) {{ (0 == $slider->video_background) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('video_background', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('enlace_video') ? 'has-error' : ''}}">
    <label for="enlace_video" class="col-md-4 control-label">{{ 'Enlace Video' }}</label>
    <div class="col-md-6">
        {!! Form::textarea('enlace_video', null, ['class' => 'form-control ']) !!}
        {!! $errors->first('enlace_video', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="estado" type="radio" value="1" {{ (isset($slider) && 1 == $slider->estado) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="estado" type="radio" value="0" @if (isset($slider)) {{ (0 == $slider->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Crear' }}">
    </div>
</div>
