@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
    <div class="uk-container">
        <div class="uk-card uk-card-body uk-card-default">

            @if (session('status'))
            <div uk-alert>
                <a href="#" class="uk-alert-close" uk-close></a>
                <p>{{ session('status') }}</p>
            </div>
            @endif

            <h1 class="uk-card-title">Reset Password</h1>
            <form class="uk-form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-h-text">Email Address</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-h-text" type="email" name="email" value="{{ old('email') }}" placeholder="" autofocus> @if ($errors->has('email'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin" uk-margin>
                    <button type="submit" class="uk-button uk-button-primary">Send Password Reset Link</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection