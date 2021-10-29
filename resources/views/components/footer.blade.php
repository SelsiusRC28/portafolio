<footer>
    <div class="footer__conteiner1 mb-2">
        <img src="{{asset('images/1Home/logo.png')}}" alt="" class="footer__conteiner1-img">
        <h3 class="footer__conteiner__div-h3">Your are Sign in?</h3>
        <div class="footer__conteiner__div d-flex">
            <a class="button-center" href=""><button class="button-c button-center">Click here</button></a>
        </div>
    </div>
    <img src="{{asset('images/1Home/Divider.svg')}}" alt="" class="footer__svg">
    <div class="footer__conteiner2 mt-5">

        <div class="footer__conteiner2__links">
            <ul >
                <a class="{{request()->routeIs('home') ? 'nav__link--active' : ''}}" href="{{route('home')}}"><li>Home</li></a>
                <a class="{{request()->routeIs('about') ? 'nav__link--active' : ''}}" href="{{route('about')}}"><li>About</li></a>
                <a class="{{request()->routeIs('proyects') ? 'nav__link--active' : ''}}" href="{{route('proyects')}}"><li>Projects</li></a>
                <a class="{{request()->routeIs('contact') ? 'nav__link--active' : ''}}" href="{{route('contact')}}"><li>Contact</li></a>
                <a class="{{request()->routeIs('login') ? 'nav__link--active' : ''}}" href="{{route('login')}}"><li>Login</li></a>
                <a class="{{request()->routeIs('register') ? 'nav__link--active' : ''}}" href="{{route('register')}}"><li>Register</li></a>
            </ul>
        </div>
    </div>
    <div class="footer__conteiner3 mt-5 mb-5">
        <div class="footer__terms">
            <a href="" class="footer__conteiner3-link mr-4">Terms & Conditions</a>
            <a href="" class="footer__conteiner3-link">Privacy Policy</a>   
        </div>
        <div class="footer__icons">
            <a target="_blank" href="https://github.com/SelsiusRC28/" ><img src="{{asset('images/1Home/github.svg')}}" alt=""></a>
            <a target="_blank" href=""><img src="{{asset('images/1Home/btc.svg')}}" alt=""></a>
            <a target="_blank" shref=""><img src="{{asset('images/1Home/telegram.svg')}}" alt=""></a>
        </div>
    </div>
    
</footer>