@extends('layouts.app')

@section('title', 'Erick Developer')

@section('content')

<style>
    .proyect__header{
        background: url({{asset('storage/proyects/'.$project->img)}}) ;
        /* background: rgba(0, 0, 0, 0.2); */
        filter: blur(10px);
        background-repeat: no-repeat;
        background-position: center top;
        background-size: cover;
    }
</style>

    <header class="proyect__header">
        <h1 class="proyect__header-h2">{{$project->title}}</h1>
        <h1 class="proyect__header-h2">HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </h1>
        <div class="proyect_header__img">
            <img src="{{asset('storage/proyects/'.$project->img)}}" alt="" class="proyect_header__img-img">
            
        </div>
    </header>
    <article>
        <section>
            {!!$project->content!!}
        </section>
    </article>
@endsection