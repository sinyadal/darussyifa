<nav class="uk-navbar-container">
    <div class="uk-container-expand">
        <div uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="/">
                    <img src="/image/logo.png" height="65px" width="65px"> Darussyifa</a>
            </div>

            <div class="uk-navbar-right">
                @guest
                <div class="uk-navbar-item">
                    <a href="{{ route('login') }}" class="uk-button uk-button-primary">Login</a>
                </div>

                @else
                <div class="uk-navbar-item">
                    <button class="uk-button uk-button-default" type="button">Hi! {{ Auth::user()->name }}
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                    <div uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            @if(Auth::user()->level===1)
                            <li>
                                <a href="{{ route('patient.index') }}">Manage Patient</a>
                            </li>
                            @else @endif
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