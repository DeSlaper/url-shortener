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
                <div class="input-group">
                  {{ Form::text('url-hashed', url(Session::get('hashed')), ['class' => 'form-control', 'id' => 'url-hashed']) }}
                  <div class="input-group-button">
                      <button type="button" class="btn copy-btn" data-clipboard-target="#url-hashed">
                          <img src="https://clipboardjs.com/assets/images/clippy.svg" alt="Copy to clipboard" width=13 style="margin-top: -3px; position: relative; top: 3px;">
                      </button>
                  </div>
                </div>
            </div>
        @endif
    </div>
@stop
