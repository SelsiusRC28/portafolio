@extends('layouts.app') @section('title', 'Erick Developer') @section('content')
<img src="{{ asset('images/1Home/about-svg.svg') }}" alt="" class="about-svg" />
<div class="about__center">
    <h2 class="about-h2">About me</h2>
    <div class="about__header">
        <div class="about__header__div" >
            <p class="about__header-p p-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet
                magna nisi eu congue tristique tellus congue. Gravida elit ipsum
                id egestas massa ac amet, nunc massa. Lorem ipsum dolor sit
                amet, consectetur adipiscing elit. Amet magna nisi eu congue
                tristique tellus congue. Gravida elit ipsum id egestas massa ac
                amet, nunc massa.
            </p>
        </div>
        <div class="about__header__div " >
            <img src="{{ asset('images/1Home/about-meow.png') }}" alt="" class="about__header-img" />
        </div>
    </div>

    <div class="about__goals">
        <h3 class="about__goals-h3 mb-3">Goals:</h3>
        <ul class="about__goals-ul">
            <li class="about__goals-li">
                <img src="{{ asset('images/1Home/about-star.svg') }}" alt="" />Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.
            </li>
            <li class="about__goals-li">
                <img src="{{ asset('images/1Home/about-star.svg') }}" alt="" />Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.
            </li>
            <li class="about__goals-li">
                <img src="{{ asset('images/1Home/about-star.svg') }}" alt="" />Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.
            </li>

            <li class="about__goals-li">
                <img src="{{ asset('images/1Home/about-star.svg') }}" alt="" />Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.
            </li>
            <li class="about__goals-li">
                <img src="{{ asset('images/1Home/about-star.svg') }}" alt="" />Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.
            </li>
            <li class="about__goals-li">
                <img src="{{ asset('images/1Home/about-star.svg') }}" alt="" />Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.
            </li>
        </ul>
    </div>
    <h3 class="about__goals-h3 mb-3">Blog:</h3>
    <div class="about__blog">
        <div class="about__blog__div">
            <div class="about__blog__dev__icon">
                <img src="{{ asset('images/1Home/about-dev.svg') }}" alt="" />
                <h3 class="about__blog-h3">Dev</h3>
            </div>
            <ol class="about__blog-ol">
                <li>
                    Amet sit egestas senectus habitant convallis dictum nec.
                    Sit felis pellentesque molestie bibendum imperdiet.
                    Ipsum phare
                </li>
                <li>Odio eros nullam sed egestas.</li>
                <li>
                    Aliquam nunc enim, pulvinar turpis lectus cras pretium,
                    diam amet.
                </li>
                <li>
                    In pellentesque pharetra condimentum fusce ac non in.
                    Auctor consectetur quam lacus, eget adipiscing
                    sollicitudin.
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
                    Amet sit egestas senectus habitant convallis dictum nec.
                    Sit felis pellentesque molestie bibendum imperdiet.
                    Ipsum phare
                </li>
                <li>Odio eros nullam sed egestas.</li>
                <li>
                    Aliquam nunc enim, pulvinar turpis lectus cras pretium,
                    diam amet.
                </li>
                <li>
                    In pellentesque pharetra condimentum fusce ac non in.
                    Auctor consectetur quam lacus, eget adipiscing
                    sollicitudin.
                </li>
            </ol>
        </div>
    </div>
</div>
</div>
@endsection
