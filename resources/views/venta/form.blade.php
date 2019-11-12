<div class="form-group {{ $errors->has('Fecha') ? 'has-error' : ''}}">
    <label for="Fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="Fecha" type="date" id="Fecha" value="{{ isset($ventum->Fecha) ? $ventum->Fecha : ''}}" required>
    {!! $errors->first('Fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Producto') ? 'has-error' : ''}}">
    <label for="Producto" class="control-label">{{ 'Producto' }}</label>
    <input class="form-control" name="Producto" type="text" id="Producto" value="{{ isset($ventum->Producto) ? $ventum->Producto : ''}}" >
    {!! $errors->first('Producto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Precio') ? 'has-error' : ''}}">
    <label for="Precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="Precio" type="number" id="Precio" value="{{ isset($ventum->Precio) ? $ventum->Precio : ''}}" >
    {!! $errors->first('Precio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
