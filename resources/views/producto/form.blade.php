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
<div class="form-group {{ $errors->has('Categoria') ? 'has-error' : ''}}">
    <label for="Categoria" class="control-label">{{ 'Categoria' }}</label>
    <select name="Categoria" class="form-control" id="Categoria" >
    @foreach (json_decode('{"Bebida":"Bebida","Galleta":"Galleta","Sabrita":"Sabrita"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($producto->Categoria) && $producto->Categoria == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Categoria', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Distribuidor') ? 'has-error' : ''}}">
    <label for="Distribuidor" class="control-label">{{ 'Distribuidor' }}</label>
    <select name="Distribuidor" class="form-control" id="Distribuidor" >
    @foreach (json_decode('{"Coca-cola":"Coca-cola","Pepsico":"Pepsico","Grupo bimbo":"Grupo bimbo","Nestle":"Nestle","Mars":"Mars","Holanda":"Holanda"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($producto->Distribuidor) && $producto->Distribuidor == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Distribuidor', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
