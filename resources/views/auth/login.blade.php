@extends('layouts.app') @section('content')


<div class="uk-section uk-section-default">
    <div class="uk-container">
        <div class="uk-card uk-card-body uk-card-default">
            <h1 class="uk-card-title">Login</h1>

            <form class="uk-form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="uk-margin">
                    <label class="uk-form-label">Email Address</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="email" name="email" value="{{ old('email') }}" placeholder="" autofocus> @if ($errors->has('email'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                        @endif
                    </div>

                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="password" name="password" placeholder=""> @if ($errors->has('password'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('password') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <span class="uk-form-label">Checkbox</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label>
                            <input class="uk-checkbox" type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> Remember Me</label>
                    </div>
                </div>

                <div class="uk-margin" uk-margin>
                    <button type="submit" class="uk-button uk-button-primary">Login</button>
                    <a href="{{ route('password.request') }}" class="uk-button uk-button-default">Forgot Password?</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection