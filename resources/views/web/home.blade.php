@extends('layouts.app')

@section('title', 'Erick Developer')

@section('content')
    @include('layouts.header')
    <header class="home__header " >
        <section class="home__section">
            <article class="home__article__text">
                <h1 class="home__article-h1">Hi am Erick</h1>
                <h2 class="home__article-h2">Full Stack Developer</h2>
                <p class="home__article-p">Bienvenido a mi portafolio, podrás revisar mis mejores proyectos y las formas de contactarme.</p>
            </article>
            <article class="home__article__img">
                <img src="{{asset('images/1Home/vue.png')}}" alt="vue logo erickdeveloper">
            </article>
        </section>
    </header>
    <img src="{{asset('images/1Home/Vector.svg')}}" alt="" class="svg">
    <section class="home__about">
        <h2 class="home__about-h2 h2-c">About me</h2>
        <div class="home__about__container">
            <div class="home__about__div p-5 ">
                <p class="home__about-p p-c ">Me llamo Erick y soy Full Stack Developer, me encanta programar y crear cosas muy dificiles porque me gusta aprender, llevo varios años desarrollando software y cada vez encuentro mas cosas nuevas por eso me encanta esta profesion. :)</p>
                <a href=""><button class="button-c button-center mt-3"> More...</button></a>
            </div>
            <div class="home__about__div">
                <img src="{{asset('images/1Home/beluga.png')}}" alt="" class="home__about-img">
            </div>
        </div>  
    </section>
    <img src="{{asset('images/1Home/Vector2.svg')}}" alt="" class="svg">
    <section>
        <h2 class="h2-c text-center mt-4 home__skills-h2">Skills</h2>
        <img src="{{asset('images/1Home/skills.png')}}" alt="vue laravel full stack erick developer" class="home_skills-img">
    </section>
@endsection