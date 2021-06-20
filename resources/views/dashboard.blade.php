<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="p-4">
                <x-jet-button wire:click="$set('showEventModal', true)">Create Event</x-jet-button>
            </div>
        </h2>
    </x-slot>
        
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             @livewire('events', ['events' => $events])
        </div>
    </div>
</x-app-layout>