<div class="form-group {{ $errors->has('maquina_id') ? 'has-error' : ''}}">
    <label for="maquina_id" class="control-label">{{ 'Maquina Id' }}</label>
    <input class="form-control" name="maquina_id" type="number" id="maquina_id" value="{{ isset($stock->maquina_id) ? $stock->maquina_id : ''}}" >
    {!! $errors->first('maquina_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('producto') ? 'has-error' : ''}}">
    <label for="producto" class="control-label">{{ 'Producto' }}</label>
    <input class="form-control" name="producto" type="number" id="producto" value="{{ isset($stock->producto) ? $stock->producto : ''}}" >
    {!! $errors->first('producto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($stock->cantidad) ? $stock->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
