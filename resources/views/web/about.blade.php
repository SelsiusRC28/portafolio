@extends('layouts.app') @section('title', 'Erick Developer') @section('content')
<img src="{{ asset('images/1Home/about-svg.svg') }}" alt="" class="about-svg" />
<div class="about__center">
    <h2 class="about-h2">About me</h2>
    <div class="about__header">
        <div class="about__header__div" >
            <p class="about__header-p p-5">
                Me llamo Erick y soy Full Stack Developer, me encanta programar y crear cosas muy dificiles porque me gusta aprender, llevo varios años desarrollando software y cada vez encuentro mas cosas nuevas por eso me encanta esta profesion. :)
            </p>
        </div>
        <div class="about__header__div " >
            <img src="{{ asset('images/1Home/about-meow.png') }}" alt="" class="about__header-img" />
        </div>
    </div>

    <div class="about__goals">
        <h3 class="about__goals-h3 mb-3">Hobbies:</h3>
        <ul class="about__goals-ul">
            <li class="about__goals-li">
                <img src="{{ asset('images/1Home/about-star.svg') }}" alt="" class="pr-1"/>Jugar Ajedrez
            </li>
            <li class="about__goals-li">
                <img src="{{ asset('images/1Home/about-star.svg') }}" alt="" class="pr-1"/>Programar cosas nuevas
            </li>
            <li class="about__goals-li">
                <img src="{{ asset('images/1Home/about-star.svg') }}" alt="" class="pr-1"/>Crear contenido audiovisual
            </li>

            <li class="about__goals-li">
                <img src="{{ asset('images/1Home/about-star.svg') }}" alt="" class="pr-1"/>Enseñar lo que aprendo
            </li>
            <li class="about__goals-li">
                <img src="{{ asset('images/1Home/about-star.svg') }}" alt="" class="pr-1"/>Practicar deportes
            </li>
        </ul>
    </div>
    <h3 class="about__goals-h3 mb-3">Proximamente...</h3>
    <div class="about__blog">
        <div class="about__blog__div">
            <div class="about__blog__dev__icon">
                <img src="{{ asset('images/1Home/about-dev.svg') }}" alt="" />
                <h3 class="about__blog-h3">Dev</h3>
            </div>
            <ol class="about__blog-ol">
                <li>
                    
                </li>
                
            </ol>
        </div>
        <div class="about__blog__div">
            <div class="about__blog__dev__icon">
                <img src="{{ asset('images/1Home/about-life.svg') }}" alt="" />
                <h3 class="about__blog-h3">Life</h3>
            </div>
            <ol class="about__blog-ol">
                <li>
                    
                </li> 
            </ol>
        </div>
    </div>
</div>
</div>
@endsection
