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
@endsection