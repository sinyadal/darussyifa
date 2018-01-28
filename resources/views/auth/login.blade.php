<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>

    <nav class="uk-navbar-container">
        <div class="uk-container uk-container">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="#">Darussyifa</a>
                </div>
                <div class="uk-navbar-right">
                    @guest
                    <div class="uk-navbar-item">
                        <a href="{{ route('login') }}" class="uk-button uk-button-primary">Login</a>
                    </div>
                    @else
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="#">{{ Auth::user()->name }}</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                    </li>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <div class="uk-section uk-section-default">
        <div class="uk-container">

            <div class="uk-card uk-card-body uk-card-primary">
                <h1 class="uk-card-title">Login</h1>

                <form class="uk-form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-h-text">Email Address</label>
                        <div class="uk-form-controls">
                            <input class="uk-input {{ $errors->has('email') ? 'uk-form-danger' : '' }}" id="form-h-text" type="email" name="email" value="{{ old('email') }}"
                                placeholder="" autofocus> @if ($errors->has('email'))
                            <div class="uk-margin uk-text-danger">
                                <p>{{ $errors->first('email') }}</p>
                            </div>
                            @endif
                        </div>

                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-h-text">Password</label>
                        <div class="uk-form-controls">
                            <input class="uk-input {{ $errors->has('password') ? 'uk-form-danger' : '' }}" id="form-h-text" type="password" name="password"
                                placeholder=""> @if ($errors->has('password'))
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

        <div class="uk-section uk-section-small uk-position-bottom uk-section-secondary">
            <div class="uk-container">
                Copyright Darussyifa 2018.
            </div>
        </div>
    </div>
    </div>



</body>

</html>







{{--
<form class="uk-form-horizontal">
    <div class="uk-margin">
        <label class="uk-form-label" for="form-h-text">Email Address</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-h-text" type="text" placeholder="">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-h-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-h-text" type="password" placeholder="">
        </div>
    </div>

    <div class="uk-margin">
        <span class="uk-form-label">Checkbox</span>
        <div class="uk-form-controls uk-form-controls-text">
            <label>
                <input class="uk-checkbox" type="checkbox"> Remember Me</label>
        </div>
    </div>

    <div class="uk-margin" uk-margin>
        <button class="uk-button uk-button-primary">Login</button>
        <button class="uk-button uk-button-default">Forgot Password?</button>
    </div>
</form> --}}