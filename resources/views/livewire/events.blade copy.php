<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    @foreach($events as $event)
        <div class="p-4 border-b border-gray-200">
            <h2 class="text-xl font-medium">{{ $event->title }}</h2>
            <p class="text-gray-600 leading-relaxed">{{ $event->date_event }}</p>
        </div>
    @endforeach
</div>
