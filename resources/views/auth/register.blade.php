@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
    <div class="uk-container">
        <div class="uk-card uk-card-body uk-card-default">
            <h1 class="uk-card-title">Register</h1>
            <form class="uk-form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="uk-margin">
                    <label class="uk-form-label">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="name" value="{{ old('name') }}" placeholder="" autofocus> @if ($errors->has('name'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('name') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

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
                    <label class="uk-form-label">Confirm Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="password" name="password_confirmation" placeholder=""> @if ($errors->has('password_confirmation'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('password_confirmation') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin" uk-margin>
                    <button type="submit" class="uk-button uk-button-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection