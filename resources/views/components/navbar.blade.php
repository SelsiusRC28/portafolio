<nav class="shadow-lg {{request()->routeIs('about') ? 'shadow-none' : ''}}">
    <div class="nav__content">
        <a class="nav__logo-link" href="{{ url('/') }}">
            <img src="{{asset('images/1Home/logo.png')}}" alt="" class="nav__logo-img">
            <span>Erick</span>
        </a>
        
            <!-- Left Side Of Navbar -->
            <ul class="nav__links">
               <a class="nav__link {{request()->routeIs('home') ? 'nav__link--active' : ''}}" href="{{route('home')}}"><li class="nav__link-li">Home</li></a>
               <a class="nav__link {{request()->routeIs('about') ? 'nav__link--active' : ''}}" href="{{route('about')}}"><li class="nav__link-li">About</li></a>
               <a class="nav__link {{request()->routeIs('proyects') ? 'nav__link--active' : ''}}" href="{{route('proyects')}}"><li class="nav__link-li">Projects</li></a>
               <a class="nav__link {{request()->routeIs('contact') ? 'nav__link--active' : ''}}" href="{{route('contact')}}"><li class="nav__link-li">Contact</li></a>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav__login">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav__link  {{request()->routeIs('login') ? 'nav__link--active' : ''}}" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav__link  {{request()->routeIs('register') ? 'nav__link--active' : ''}}" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav__link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('dashboard.index') }}">
                                {{ __('Dashboard') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
       
    </div>
</nav>