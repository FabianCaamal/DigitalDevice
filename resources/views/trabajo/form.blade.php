<div class="form-group {{ $errors->has('Empleado') ? 'has-error' : ''}}">
    <label for="Empleado" class="control-label">{{ 'Empleado' }}</label>
    <input class="form-control" name="Empleado" type="text" id="Empleado" value="{{ isset($trabajo->Empleado) ? $trabajo->Empleado : ''}}" required>
    {!! $errors->first('Empleado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('UbicacionMaquina') ? 'has-error' : ''}}">
    <label for="UbicacionMaquina" class="control-label">{{ 'Ubicacionmaquina' }}</label>
    <input class="form-control" name="UbicacionMaquina" type="text" id="UbicacionMaquina" value="{{ isset($trabajo->UbicacionMaquina) ? $trabajo->UbicacionMaquina : ''}}" >
    {!! $errors->first('UbicacionMaquina', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('CantidadAsignada') ? 'has-error' : ''}}">
    <label for="CantidadAsignada" class="control-label">{{ 'Cantidadasignada' }}</label>
    <input class="form-control" name="CantidadAsignada" type="text" id="CantidadAsignada" value="{{ isset($trabajo->CantidadAsignada) ? $trabajo->CantidadAsignada : ''}}" >
    {!! $errors->first('CantidadAsignada', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('FechaEncargo') ? 'has-error' : ''}}">
    <label for="FechaEncargo" class="control-label">{{ 'Fechaencargo' }}</label>
    <input class="form-control" name="FechaEncargo" type="date" id="FechaEncargo" value="{{ isset($trabajo->FechaEncargo) ? $trabajo->FechaEncargo : ''}}" required>
    {!! $errors->first('FechaEncargo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('EstatusTrabajo') ? 'has-error' : ''}}">
    <label for="EstatusTrabajo" class="control-label">{{ 'Estatustrabajo' }}</label>
    <select name="EstatusTrabajo" class="form-control" id="EstatusTrabajo" >
    @foreach (json_decode('{"Pendiente":"Pendiente","Realizado":"Realizado"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($trabajo->EstatusTrabajo) && $trabajo->EstatusTrabajo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('EstatusTrabajo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
