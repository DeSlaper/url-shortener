@extends('layout')

@section('content')
    <div class="put-the-dang-thing-in-the-middle">
        <h1>URL Shortener</h1>

        {{ Form::open(['url' => 'links']) }}
        <div class="form-group">
            {{ Form::text('url', null, ['class' => 'form-control', 'id' => 'shorten-input', 'placeholder' => 'http://myadm.nl']) }}
            {{ $errors->first('url', '<div class="error">:message</div>') }}

        </div>
        {{ Form::close() }}

        @if(Session::has('hashed'))
            <div class="output">
                {{ link_to(Session::get('hashed'), null, ['target' => '_blank']) }}
            </div>
        @endif
    </div>
@stop