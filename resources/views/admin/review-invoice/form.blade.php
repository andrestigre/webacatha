<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="title" type="text" id="title" value="{{ $reviewinvoice->title or ''}}" required>
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="col-md-4 control-label">{{ 'Price' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="price" type="number" id="price" value="{{ $reviewinvoice->price or ''}}" required>
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('pack') ? 'has-error' : ''}}">
    <label for="pack" class="col-md-4 control-label">{{ 'Pack' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="pack" type="text" id="pack" value="{{ $reviewinvoice->pack or ''}}" >
        {!! $errors->first('pack', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('payment_status') ? 'has-error' : ''}}">
    <label for="payment_status" class="col-md-4 control-label">{{ 'Payment Status' }}</label>
    <div class="col-md-6">
        <select name="payment_status" class="form-control" id="payment_status" >
    @foreach (json_decode('{"0":"Completado","1":"En espera"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($reviewinvoice->payment_status) && $reviewinvoice->payment_status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('payment_status', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('detall') ? 'has-error' : ''}}">
    <label for="detall" class="col-md-4 control-label">{{ 'Detall' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="detall" type="textarea" id="detall" >{{ $reviewinvoice->detall or ''}}</textarea>
        {!! $errors->first('detall', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tipo_paquete') ? 'has-error' : ''}}">
    <label for="tipo_paquete" class="col-md-4 control-label">{{ 'Tipo Paquete' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tipo_paquete" type="text" id="tipo_paquete" value="{{ $reviewinvoice->tipo_paquete or ''}}" >
        {!! $errors->first('tipo_paquete', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cli_nombre') ? 'has-error' : ''}}">
    <label for="cli_nombre" class="col-md-4 control-label">{{ 'Cli Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cli_nombre" type="text" id="cli_nombre" value="{{ $reviewinvoice->cli_nombre or ''}}" >
        {!! $errors->first('cli_nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cli_email') ? 'has-error' : ''}}">
    <label for="cli_email" class="col-md-4 control-label">{{ 'Cli Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cli_email" type="text" id="cli_email" value="{{ $reviewinvoice->cli_email or ''}}" >
        {!! $errors->first('cli_email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cli_contacto') ? 'has-error' : ''}}">
    <label for="cli_contacto" class="col-md-4 control-label">{{ 'Cli Contacto' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cli_contacto" type="text" id="cli_contacto" value="{{ $reviewinvoice->cli_contacto or ''}}" >
        {!! $errors->first('cli_contacto', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
