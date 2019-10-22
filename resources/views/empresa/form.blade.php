<div class="form-group {{ $errors->has('Marca') ? 'has-error' : ''}}">
    <label for="Marca" class="control-label">{{ 'Marca' }}</label>
    <input class="form-control" name="Marca" type="text" id="Marca" value="{{ isset($empresa->Marca) ? $empresa->Marca : ''}}" >
    {!! $errors->first('Marca', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Direccion') ? 'has-error' : ''}}">
    <label for="Direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="Direccion" type="text" id="Direccion" value="{{ isset($empresa->Direccion) ? $empresa->Direccion : ''}}" >
    {!! $errors->first('Direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Correo') ? 'has-error' : ''}}">
    <label for="Correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="Correo" type="text" id="Correo" value="{{ isset($empresa->Correo) ? $empresa->Correo : ''}}" required>
    {!! $errors->first('Correo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
