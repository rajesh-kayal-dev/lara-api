<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            RegistrationApp
        </a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guide') }}">Guide</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endguest

                @auth
                    {{-- Admin-only link --}}
                    @if (auth()->user()->hasRole('admin'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.users.index') }}">
                                Manage Users
                            </a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.edit') }}">
                            Profile
                        </a>
                    </li>

                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link text-danger p-0">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
