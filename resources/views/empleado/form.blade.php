<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($empleado->nombre) ? $empleado->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('edad') ? 'has-error' : ''}}">
    <label for="edad" class="control-label">{{ 'Edad' }}</label>
    <input class="form-control" name="edad" type="number" id="edad" value="{{ isset($empleado->edad) ? $empleado->edad : ''}}" >
    {!! $errors->first('edad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="telefono" type="text" id="telefono" value="{{ isset($empleado->telefono) ? $empleado->telefono : ''}}" >
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
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
<div class="form-group {{ $errors->has('nivelEducativo') ? 'has-error' : ''}}">
    <label for="nivelEducativo" class="control-label">{{ 'Niveleducativo' }}</label>
    <select name="nivelEducativo" class="form-control" id="nivelEducativo" >
    @foreach (json_decode('{"preescolar":"Preescolar","primaria":"Primaria","secundaria":"Secundaria","media tecnica":"Media tecnica","profesional":"Profesional","posgrado":"Posgrado","ninguno":"Ninguno"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($empleado->nivelEducativo) && $empleado->nivelEducativo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('nivelEducativo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargo') ? 'has-error' : ''}}">
    <label for="cargo" class="control-label">{{ 'Cargo' }}</label>
    <input class="form-control" name="cargo" type="text" id="cargo" value="{{ isset($empleado->cargo) ? $empleado->cargo : ''}}" >
    {!! $errors->first('cargo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaIngreso') ? 'has-error' : ''}}">
    <label for="fechaIngreso" class="control-label">{{ 'Fechaingreso' }}</label>
    <input class="form-control" name="fechaIngreso" type="date" id="fechaIngreso" value="{{ isset($empleado->fechaIngreso) ? $empleado->fechaIngreso : ''}}" >
    {!! $errors->first('fechaIngreso', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group {{ $errors->has('empresa_id') ? 'has-error' : ''}}">
    <label for="empresa_id" class="control-label">{{ 'Empresa' }}</label>
    
    <select class="form-control" name="empresa_id" >
        @foreach($empresas as $emp)

        <option value="{{ $emp->id }}" {{isset($empleado->empresa_id) && $empleado->empresa_id== $emp->id ? 'selected' : ''}} >
         {{ $emp->Marca }}</option>

        @endforeach
    </select>

{!! $errors->first('empresa_id', '<p class="help-block">:message</p>') !!}

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
