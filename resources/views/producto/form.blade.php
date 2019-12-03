<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($producto->nombre) ? $producto->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($producto->precio) ? $producto->precio : ''}}" required>
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoria') ? 'has-error' : ''}}">
    <label for="categoria" class="control-label">{{ 'Categoria' }}</label>
    <select name="categoria" class="form-control" id="categoria" >
    @foreach (json_decode('{"Bebida":"Bebida","Galleta":"Galleta","Sabrita":"Sabrita"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($producto->categoria) && $producto->categoria == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('categoria', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('empresa_id') ? 'has-error' : ''}}">
    <label for="empresa_id" class="control-label">{{ 'Empresa Id' }}</label>
    <input class="form-control" name="empresa_id" type="number" id="empresa_id" value="{{ isset($producto->empresa_id) ? $producto->empresa_id : ''}}" >
    {!! $errors->first('empresa_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
