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

                    @endguest

                </div>
            </div>
        </div>
    </nav>

    <div class="uk-section uk-section-default">
        <div class="uk-container">

            <div class="uk-card uk-card-body uk-card-default">
                <h1 class="uk-card-title">Login</h1>


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