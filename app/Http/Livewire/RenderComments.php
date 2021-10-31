<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class RenderComments extends Component
{
    public $project ;
    protected $listeners = ['render' => 'render'];

    public function render()
    {
        return view('livewire.render-comments', [
            // 'comments' => Comment::orderBy('id', 'DESC')->get(),
            'comments' => Comment::where('proyect_id', $this->project)->orderBy('id', 'DESC')->get(),
        ]);
    }
}
