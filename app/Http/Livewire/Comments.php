<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $text;
    public $user;
    public $project;



    
    protected $rules = [
        'text' => 'required'
    ];


    public function render()
    {
        return view('livewire.comments', [
            'user' => $this->user
        ]);
    }

    public function save(){
        $this->validate();
        
        $comment = new Comment();
        $comment->likes = null;
        $comment->content = $this->text;
        $comment->proyect_id = $this->project;
        $comment->user_id = $this->user;
        $comment->save();
    
        $this->text = '';

        $this->emit('render');
    }

    public function role(){
        if($this->user == 1){
            return "Owner";
        }else{
            return false;
        }
    }
}
