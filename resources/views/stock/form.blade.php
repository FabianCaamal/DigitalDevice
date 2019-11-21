<div class="form-group {{ $errors->has('maquina_id') ? 'has-error' : ''}}">
    <label for="maquina_id" class="control-label">{{ 'Maquina Id' }}</label>
    <input class="form-control" name="maquina_id" type="number" id="maquina_id" value="{{ isset($stock->maquina_id) ? $stock->maquina_id : ''}}" >
    {!! $errors->first('maquina_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('producto_id') ? 'has-error' : ''}}">
    <label for="producto_id" class="control-label">{{ 'Producto Id' }}</label>
    <input class="form-control" name="producto_id" type="number" id="producto_id" value="{{ isset($stock->producto_id) ? $stock->producto_id : ''}}" >
    {!! $errors->first('producto_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($stock->cantidad) ? $stock->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($stock->precio) ? $stock->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
