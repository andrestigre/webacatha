<div class="form-group {{ $errors->has('car_paquete') ? 'has-error' : ''}}">
    <label for="car_paquete" class="col-md-4 control-label">{{ 'Car Paquete' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="car_paquete" type="text" id="car_paquete" value="{{ $caracteristicapaquete->car_paquete or ''}}" >
        {!! $errors->first('car_paquete', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="estado" type="radio" value="1" {{ (isset($caracteristicapaquete) && 1 == $caracteristicapaquete->estado) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="estado" type="radio" value="0" @if (isset($caracteristicapaquete)) {{ (0 == $caracteristicapaquete->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('paquete_id') ? 'has-error' : ''}}">
    <label for="paquete_id" class="col-md-4 control-label">{{ 'Paquete Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="paquete_id" type="number" id="paquete_id" value="{{ $caracteristicapaquete->paquete_id or ''}}" >
        {!! $errors->first('paquete_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
