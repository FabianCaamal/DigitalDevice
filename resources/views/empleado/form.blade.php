<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($empleado->nombre) ? $empleado->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero') ? 'has-error' : ''}}">
    <label for="numero" class="control-label">{{ 'Numero' }}</label>
    <input class="form-control" name="numero" type="text" id="numero" value="{{ isset($empleado->numero) ? $empleado->numero : ''}}" >
    {!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
    <label for="correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="correo" type="text" id="correo" value="{{ isset($empleado->correo) ? $empleado->correo : ''}}" required>
    {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="direccion" type="text" id="direccion" value="{{ isset($empleado->direccion) ? $empleado->direccion : ''}}" >
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo') ? 'has-error' : ''}}">
    <label for="cargo" class="control-label">{{ 'Cargo' }}</label>
    <input class="form-control" name="cargo" type="text" id="cargo" value="{{ isset($empleado->cargo) ? $empleado->cargo : ''}}" >
    {!! $errors->first('cargo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('empresa_id') ? 'has-error' : ''}}">
    <label for="empresa_id" class="control-label">{{ 'Empresa Id' }}</label>
    <input class="form-control" name="empresa_id" type="number" id="empresa_id" value="{{ isset($empleado->empresa_id) ? $empleado->empresa_id : ''}}" >
    {!! $errors->first('empresa_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
