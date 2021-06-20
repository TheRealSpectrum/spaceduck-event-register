<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Event;

class Events extends Component
{
    use WithPagination;
    public $events;
    public $showEventsModal = false;
    
    public function render()
    {
        return view('livewire.events', [
            'events' => Event::orderBy('date_event', 'asc')->paginate(10),
        ]);
    }
}
