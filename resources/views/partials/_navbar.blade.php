<nav class="uk-navbar-container">
    <div class="uk-container-expand">
        <div uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="/">Darussyifa</a>
            </div>

            <div class="uk-navbar-right">
                @guest
                <div class="uk-navbar-item">
                    <a href="{{ route('login') }}" class="uk-button uk-button-primary">Login</a>
                </div>

                @else
                <div class="uk-navbar-item">
                    <button class="uk-button uk-button-default" type="button">Hi! {{ Auth::user()->name }}</button>
                    <div uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            <li>
                                <a href="{{ route('patient.index') }}">Manage Patient</a>
                            </li>
                            <li class="uk-nav-divider"></li>


                            <li class="">
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
                </div>
                @endguest
            </div>
        </div>
    </div>
</nav>