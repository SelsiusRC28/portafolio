@extends('layouts.app')

@section('title', 'Erick Developer')

@section('content')
    @include('layouts.header')
    <header class="home__header " >
        <section class="home__section">
            <article class="home__article__text">
                <h1 class="home__article-h1">Hi am Erick</h1>
                <h2 class="home__article-h2">Full Stack Developer</h2>
                <p class="home__article-p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque consequuntur nemo cupiditate quos commodi ducimus voluptate eum soluta suscipit molestiae molestias ipsam, ex consequatur nostrum nobis. Doloremque porro dolor magni!</p>
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
                <p class="home__about-p p-c ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet magna nisi eu congue tristique tellus congue. Gravida elit ipsum id egestas massa ac amet, nunc massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet magna nisi eu congue tristique tellus congue. Gravida elit ipsum id egestas massa ac amet, nunc massa. </p>
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