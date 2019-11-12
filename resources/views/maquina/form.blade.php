<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo" class="control-label">{{ 'Codigo' }}</label>
    <input class="form-control" name="codigo" type="text" id="codigo" value="{{ isset($maquina->codigo) ? $maquina->codigo : ''}}" >
    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('longitud') ? 'has-error' : ''}}">
    <label for="longitud" class="control-label">{{ 'Longitud' }}</label>
    <input class="form-control" name="longitud" type="text" id="longitud" value="{{ isset($maquina->longitud) ? $maquina->longitud : ''}}" required>
    {!! $errors->first('longitud', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('latitud') ? 'has-error' : ''}}">
    <label for="latitud" class="control-label">{{ 'Latitud' }}</label>
    <input class="form-control" name="latitud" type="text" id="latitud" value="{{ isset($maquina->latitud) ? $maquina->latitud : ''}}" required>
    {!! $errors->first('latitud', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('DineroAlmacenado') ? 'has-error' : ''}}">
    <label for="DineroAlmacenado" class="control-label">{{ 'Dineroalmacenado' }}</label>
    <input class="form-control" name="DineroAlmacenado" type="number" id="DineroAlmacenado" value="{{ isset($maquina->DineroAlmacenado) ? $maquina->DineroAlmacenado : ''}}" >
    {!! $errors->first('DineroAlmacenado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
