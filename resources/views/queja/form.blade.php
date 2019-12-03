<div class="form-group {{ $errors->has('usuario_id') ? 'has-error' : ''}}">
    <label for="usuario_id" class="control-label">{{ 'Usuario Id' }}</label>
    <select class="form-control" name="usuario_id" >
        @foreach($usuarios as $us)
            <option value=" {{$us->id}} {{ isset($queja->usuario_id) && $queja->usuario_id==$us->id ? 'selected' : ''}}">
                {{$us->nombre}}
            </option>
        @endforeach
    </select>
    {!! $errors->first('usuario_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('empresa_id') ? 'has-error' : ''}}">
    <label for="empresa_id" class="control-label">{{ 'Empresa Id' }}</label>



    <select class="form-control" name="empresa_id">
        @foreach($empresas as $emp)
            <option value=" {{$emp->id}} {{ isset($queja->empresa_id) && $queja->empresa_id==$emp->id ? 'selected' : ''}}">
                {{$emp->Marca}}
            </option>
        @endforeach
    </select>



    {!! $errors->first('empresa_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detalles') ? 'has-error' : ''}}">
    <label for="detalles" class="control-label">{{ 'Detalles' }}</label>
    <textarea class="form-control" rows="5" name="detalles" type="textarea" id="detalles" required>{{ isset($queja->detalles) ? $queja->detalles : ''}}</textarea>
    {!! $errors->first('detalles', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
