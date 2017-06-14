<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('device_type') ? 'has-error' : ''}}">
    {!! Form::label('device_type', 'Device Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('device_type', null, ['class' => 'form-control']) !!}
        {!! $errors->first('device_type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('orderPcs') ? 'has-error' : ''}}">
    {!! Form::label('orderPcs', 'Orderpcs', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('orderPcs', null, ['class' => 'form-control']) !!}
        {!! $errors->first('orderPcs', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    {!! Form::label('cost', 'Cost', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('cost', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('deposit') ? 'has-error' : ''}}">
    {!! Form::label('deposit', 'Deposit', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('deposit', null, ['class' => 'form-control']) !!}
        {!! $errors->first('deposit', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('model') ? 'has-error' : ''}}">
    {!! Form::label('model', 'Model', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('model', null, ['class' => 'form-control']) !!}
        {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('defective') ? 'has-error' : ''}}">
    {!! Form::label('defective', 'Defective', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('defective', null, ['class' => 'form-control']) !!}
        {!! $errors->first('defective', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('repaircost') ? 'has-error' : ''}}">
    {!! Form::label('repaircost', 'Repaircost', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('repaircost', null, ['class' => 'form-control']) !!}
        {!! $errors->first('repaircost', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('note') ? 'has-error' : ''}}">
    {!! Form::label('note', 'Note', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
        {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('statuscode') ? 'has-error' : ''}}">
    {!! Form::label('statuscode', 'Statuscode', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('statuscode', null, ['class' => 'form-control']) !!}
        {!! $errors->first('statuscode', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('condition') ? 'has-error' : ''}}">
    {!! Form::label('condition', 'Condition', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('condition', null, ['class' => 'form-control']) !!}
        {!! $errors->first('condition', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
