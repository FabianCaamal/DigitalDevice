<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="date" id="fecha" value="{{ isset($ventum->fecha) ? $ventum->fecha : ''}}" required>
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maquina_id') ? 'has-error' : ''}}">
    <label for="maquina_id" class="control-label">{{ 'Maquina Id' }}</label>
    <input class="form-control" name="maquina_id" type="number" id="maquina_id" value="{{ isset($ventum->maquina_id) ? $ventum->maquina_id : ''}}" >
    {!! $errors->first('maquina_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('producto_id') ? 'has-error' : ''}}">
    <label for="producto_id" class="control-label">{{ 'Producto Id' }}</label>
    <input class="form-control" name="producto_id" type="number" id="producto_id" value="{{ isset($ventum->producto_id) ? $ventum->producto_id : ''}}" >
    {!! $errors->first('producto_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($ventum->precio) ? $ventum->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
