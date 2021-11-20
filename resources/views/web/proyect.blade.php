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
            <x-markdown>
                {!!$project->content!!}
            </x-markdown>
    </article>
    <img src="{{asset('images/1Home/comments-separation.svg')}}" alt="" class="comments-separation">
    
    @if (Auth::user())
        @livewire('comments', ['project' => $project->id, 'user' => Auth::user()->id ])
        @livewire('render-comments')
    @else
       <a href="{{route('login')}}"> <button class="button-c button-center my-5">Login to write a comment</button></a>
    @endif
    @livewire('render-comments', ['project' => $project->id ])
        

@endsection