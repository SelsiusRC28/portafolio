@extends('layouts.app')

@section('content')
    <div class="session__container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="session-h2">Register</h2>
            <input id="name" type="text" class="session-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder='name:'>
                 @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
           

                
                    <input id="email" type="email" class="session-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="mail:">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            
                    <input id="password" type="password" class="session-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password:">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
             
               
                    <input id="password-confirm" type="password" class="session-input" name="password_confirmation" required autocomplete="new-password" placeholder="password:">
                
           

            
                    <button type="submit" class="button-c session-button ">
                        {{ __('Register') }}
                    </button>
          
        </form>
    </div>
        
    
</div>
@endsection
