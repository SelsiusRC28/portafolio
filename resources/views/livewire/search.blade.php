<div>
    <div class="project__search">
        <input type="text" name="seatch" class="project__search-input" style="background: #192734 ;background-image: url('{{asset('images/1Home/search.svg')}}');  background-repeat: no-repeat;
        background-position: 20px center;" wire:model="search" >
    </div>
    @if ($projects->count())
    <div class="lds-dual-ring" id="preloader" ></div>
        <div class="conteiner hide" id="conteiner">
            @foreach ($projects as $project)
                <div class="card">
                    <img src="{{asset('storage/proyects/'.$project->img)}}" alt="" class="card-img" >
                    <div class="card_container">
                        <h3 class="card-h3">{{$project->title}}</h3>
                        <p class="card-p">{{ $project->description }}</p>

                        <a href="{{route('proyect',$project->slug)}}"><button class="button-c card-button">More...</button></a> 
                    </div>
                    
                </div>
            @endforeach
        </div>
        @else
            <h3 class="search-no">There is no matching project.</h3>
        @endif
      
        <script>
            window.addEventListener('load',function(){
            document.getElementById('preloader').classList.add('hide');
            document.getElementById('conteiner').classList.remove('hide');
            });  
         </script>
</div>