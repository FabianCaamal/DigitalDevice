<div class="form-group {{ $errors->has('usuario_id') ? 'has-error' : ''}}">
    <label for="usuario_id" class="control-label">{{ 'Usuario Id' }}</label>
    <input class="form-control" name="usuario_id" type="number" id="usuario_id" value="{{ isset($queja->usuario_id) ? $queja->usuario_id : ''}}" >
    {!! $errors->first('usuario_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('empresa_id') ? 'has-error' : ''}}">
    <label for="empresa_id" class="control-label">{{ 'Empresa Id' }}</label>
    <input class="form-control" name="empresa_id" type="number" id="empresa_id" value="{{ isset($queja->empresa_id) ? $queja->empresa_id : ''}}" >
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
