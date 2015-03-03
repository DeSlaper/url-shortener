@extends('layout')

@section('content')
    <div class="put-the-dang-thing-in-the-middle">
        <h1>Shorten a Url</h1>

        {{ Form::open(['url' => 'links']) }}
        <div class="form-group">
            {{ Form::text('url', null, ['class' => 'form-control', 'id' => 'shorten-input', 'placeholder' => 'http://myadm.nl']) }}
            {{ $errors->first('url', '<div class="error>:message</div>') }}
        </div>
        {{ Form::close() }}
    </div>
@stop