<div class="form-group {{ $errors->has('maquina_id') ? 'has-error' : ''}}">
    <label for="maquina_id" class="control-label">{{ 'Maquina' }}</label>
    <select class="form-control" name="maquina_id">
        @foreach($maquinas as $m)
        <option value="{{ $m->id }}" {{ isset($surtir->maquina_id) && $surtir->maquina_id==$m->id ? 'selected' : ''}}>            
            {{$m->codigo}}
        </option>
        @endforeach
    </select>
    
    {!! $errors->first('maquina_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('producto_id') ? 'has-error' : ''}}">
    <label for="producto_id" class="control-label">{{ 'Producto' }}</label>

    <select class="form-control" name="producto_id">
        @foreach($productos as $p)
            <option value="{{ $p->id }}" {{isset($surtir->producto_id) && $surtir->producto_id==$p->id ? 'selected' : ''}}>
                {{$p->nombre}}
            </option>
        @endforeach
    </select>

    {!! $errors->first('producto_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($surtir->cantidad) ? $surtir->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaRealizada') ? 'has-error' : ''}}">
    <label for="fechaRealizada" class="control-label">{{ 'Fecharealizada' }}</label>
    <input class="form-control" name="fechaRealizada" type="date" id="fechaRealizada" value="{{ isset($surtir->fechaRealizada) ? $surtir->fechaRealizada : ''}}" >
    {!! $errors->first('fechaRealizada', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
