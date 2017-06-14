<div class="form-group {{ $errors->has('device') ? 'has-error' : ''}}">
    {!! Form::label('device', 'Device', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('device', null, ['class' => 'form-control']) !!}
        {!! $errors->first('device', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('notes') ? 'has-error' : ''}}">
    {!! Form::label('notes', 'Notes', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
        {!! $errors->first('notes', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
