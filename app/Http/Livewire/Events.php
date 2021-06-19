<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Events extends Component
{
    public $events;
    
    public function render()
    {
        return view('livewire.events');
    }
}
