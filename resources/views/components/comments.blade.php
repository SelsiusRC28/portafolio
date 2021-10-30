
<section class="comments">
    <div class="comments__container">
        <div class="comments__img">
            <img src="{{asset('images/1Home/Erick.png')}}" alt="" class="comments__img-img">
            <span class="comments__img-name">{{ Auth::user()->name }}</span>
        </div>
        <div class="comments__textarea">
           
            {{$slot}}
        </div>
    </div>
</section>