<x-comments >
    <div class="comments__container">
        <div class="comments__img">
            @if ($user == 1)
                <img src="{{asset('images/1Home/Erick.png')}}" alt="" class="comments__img-img">
            @else
                <img src="{{asset('images/1Home/user.png')}}" alt="" class="comments__img-img" width="82px" height="78px">
            @endif
            <span class="comments__img-name">{{ Auth::user()->name }}</span>
            @if ($user == 1)
                <span class="error text-center">Owner</span>
            @endif
         
           
        </div>
        <div class="comments__textarea">
            <textarea name="" id="" cols="30" rows="10" class="comments__textarea-text" wire:model="text"></textarea>
            @error('text') <span class="error">{{ $message }}</span> @enderror
            <button class="button-c mt-3" wire:click='save'>Public</button>
        </div>
    </div>
</x-comments>


    
