<div class="form-group {{ $errors->has('maquina_id') ? 'has-error' : ''}}">
    <label for="maquina_id" class="control-label">{{ 'Maquina' }}</label>
    <select class="form-control" name="maquina_id">
        @foreach($maquinas as $maq)
            <option value=" {{$maq->id}}" {{ isset($stock->maquina_id) && $stock->maquina_id==$maq->id ? 'selected' : ''}}> {{$maq->codigo}} </option>
        @endforeach
    </select>

    {!! $errors->first('maquina_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('producto_id') ? 'has-error' : ''}}">
    <label for="producto_id" class="control-label">{{ 'Producto' }}</label>

    <select class="form-control" name="producto_id">
        @foreach($productos as $p)
            <option value="{{$p->id}}" {{ isset($stock->producto_id) && $stock->producto_id==$p->id ? 'selected' : ''}}> {{$p->nombre}} </option>
        @endforeach
    </select>

    {!! $errors->first('producto_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($stock->cantidad) ? $stock->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
