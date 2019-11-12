<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($usuario->nombre) ? $usuario->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
    <label for="correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="correo" type="text" id="correo" value="{{ isset($usuario->correo) ? $usuario->correo : ''}}" required>
    {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
    <label for="sexo" class="control-label">{{ 'Sexo' }}</label>
    <select name="sexo" class="form-control" id="sexo" >
    @foreach (json_decode('{"Hombre":"Hombre","Mujer":"Mujer"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($usuario->sexo) && $usuario->sexo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
