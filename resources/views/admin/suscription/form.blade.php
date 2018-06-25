<div class="form-group {{ $errors->has('namesuscripcion') ? 'has-error' : ''}}">
    <label for="namesuscripcion" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="namesuscripcion" type="textarea" id="namesuscripcion" required>{{ $suscription->namesuscripcion or ''}}</textarea>
        {!! $errors->first('namesuscripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('emailsuscripcion') ? 'has-error' : ''}}">
    <label for="emailsuscripcion" class="col-md-4 control-label">{{ 'Correo' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="emailsuscripcion" type="textarea" id="emailsuscripcion" required>{{ $suscription->emailsuscripcion or ''}}</textarea>
        {!! $errors->first('emailsuscripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telefonosuscripcion') ? 'has-error' : ''}}">
    <label for="telefonosuscripcion" class="col-md-4 control-label">{{ 'Telefono' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telefonosuscripcion" type="text" id="telefonosuscripcion" value="{{ $suscription->telefonosuscripcion or ''}}" required>
        {!! $errors->first('telefonosuscripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="estado" type="radio" value="1" {{ (isset($suscription) && 1 == $suscription->estado) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="estado" type="radio" value="0" @if (isset($suscription)) {{ (0 == $suscription->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
