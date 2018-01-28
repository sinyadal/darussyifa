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