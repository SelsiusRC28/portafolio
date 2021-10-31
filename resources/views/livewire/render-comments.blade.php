<div>
    @foreach($comments as $comment)
    <x-comments class="dev">
        <div class="comments__container">
            <div class="comments__img">
                @if ($comment->user_id == 1)
                    <img src="{{asset('images/1Home/Erick.png')}}" alt="" class="comments__img-img">
                @else
                    <img src="{{asset('images/1Home/user.png')}}" alt="" class="comments__img-img" width="82px" height="78px">
                @endif
                <span class="comments__img-name">{{ $comment->user->name}}</span>
                @if ($comment->user_id == 1)
                    <span class="error text-center">Owner</span>
                 @endif
                 {{$comment->user_id}}
               
            </div>
            <div class="comments__textarea">
                <div class="comments__textarea-div">
                    <div class="comments__textarea-div-p">
                        {{$comment->content}}
                    </div>
                </div>
            </div>
        </div>
    </x-comments>
    @endforeach
</div>
