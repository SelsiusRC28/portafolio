@extends('layouts.app')

@section('content')
    <div class="session__container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="session-h2">Login</h2>
            <input id="email" type="email" class="session-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="mail:">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="password" type="password" class="session-input @error('password') session-input-error @enderror" name="password" required autocomplete="current-password" placeholder="password:">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
           
            <div class="session__remember">
                <input class="session__remember-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="session__remember-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            
            <button type="submit" class="button-c session-button">
                {{ __('Login') }}
            </button>

            <div class="session__options">
                @if (Route::has('password.request'))
                    <a class="session__options-a" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <a class="session__options-a" href="{{ route('register') }}">
                    Don't have an account?
                </a>
            </div>
           

    </div>
              
                   
@endsection
