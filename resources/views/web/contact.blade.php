@extends('layouts.app')

@section('title', 'Erick Developer')

@section('content')
    @if (session('status'))
        <script>
            Swal.fire(
            'Mail Send!',
            'We received your message, we will respond to you in less than 24 hours.',
            'success'
            )
        </script>
    @endif
    <div class="contact">
        <form action="{{route('contact.send')}}" method="post">
            @csrf
            <h2 class="contact-h2">Send Message :)</h2>
            <label for="" class="contact-label">Name:</label>
            <input type="text" class="contact-input" name="name" value="{{old('name')}}">
            <br>
            <span class="invalid">{{$errors->first('name')}}</span>
            <label for="" class="contact-label">Yourmail:</label>
            <input type="text" class="contact-input" name="mail" value="{{old('text')}}">
            <br>
            <span class="invalid">{{$errors->first('mail')}}</span>
            <label for="" class="contact-label">To:</label>
            <br>
            <img src="{{asset('images/1Home/Contact__section.jpg')}}" alt="">
            <br>
            <label for="" class="contact-label">Message:</label>
            <textarea name="text" id="" cols="30" rows="10" class="contact-textarea">{{old('text')}}</textarea>
            <br>
                <span class="invalid">{{$errors->first('text')}}</span>
            <button type="submit" class="button-c contact-button">Send</button>
        </form>
    </div>
    <div class="contact__icons">
        <a target="_blank" href="https://github.com/SelsiusRC28/"><img src="{{asset('images/1Home/github.svg')}}" alt=""></a>
        <a target="_blank" href=""><img src="{{asset('images/1Home/btc.svg')}}" alt=""></a>
        <a target="_blank" href=""><img src="{{asset('images/1Home/telegram.svg')}}" alt=""></a>
    </div>
@endsection