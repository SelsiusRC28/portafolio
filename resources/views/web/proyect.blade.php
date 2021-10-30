@extends('layouts.app')

@section('title', 'Erick Developer')

@section('content')


    <header class="proyect__header">
        <img src="{{asset('storage/proyects/'.$project->img)}}" alt="" class="proyect__header-img">
        <h2 class="proyect__header-h2">{{$project->title}}</h2>
        <div class="proyect_header__img">
            <img src="{{asset('storage/proyects/'.$project->img)}}" alt="" class="proyect_header__img-img">
        </div>
    </header>
    <article>
            <p> {!!$project->content!!}</p>
    </article>
    <img src="{{asset('images/1Home/comments-separation.svg')}}" alt="" class="comments-separation">
    <x-comments >
        <textarea name="" id="" cols="30" rows="10" class="comments__textarea-text"></textarea>
        <button class="button-c mt-3">Public</button>
    </x-comments>
    <x-comments >
        
    </x-comments>
    <x-comments >
        
    </x-comments>
@endsection