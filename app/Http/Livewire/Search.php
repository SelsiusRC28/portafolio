<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyect;

class Search extends Component
{
    public $search;

    public function render()
    {
        $projects = Proyect::where('title', 'like', '%'. $this->search. '%')->orwhere('description', 'like', '%'. $this->search. '%')->get();
        return view('livewire.search', compact('projects'));
    }
}
