<div class="form-group {{ $errors->has('status_type') ? 'has-error' : ''}}">
    {!! Form::label('status_type', 'Status Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('status_type', null, ['class' => 'form-control']) !!}
        {!! $errors->first('status_type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status_comment') ? 'has-error' : ''}}">
    {!! Form::label('status_comment', 'Status Comment', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('status_comment', null, ['class' => 'form-control']) !!}
        {!! $errors->first('status_comment', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
