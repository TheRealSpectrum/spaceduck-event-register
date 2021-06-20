<div class="p-10">
    @foreach($events as $event) 
    <!--Card 1-->
    <div class=" w-full lg:max-w-full lg:flex">
      <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover bg-center bg-no-repeat rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('http://localhost/storage/images/{{ $event->image }}')" title="Image">
      </div>
      <div class="w-full border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
          <div class="text-gray-900 font-bold text-xl mb-2">{{ $event->title }}</div>
          <p class="text-gray-700 text-base">{{ $event->description }}</p>
        </div>
        <div class="flex items-center">
          <div class="text-sm">
            <p class="text-gray-900 leading-none">{{ $event->organiser }}</p>
            <p class="text-gray-600">{{ $event->date_event }}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    {{ $events->links() }}
    <x-jet-dialog-modal wire:model="showEventModal">
      <x-slot name="title">
          {{ __('Create a new Event') }}
      </x-slot>

      <x-slot name="content">
          <div class="">

          </div>

          <x-jet-input x-ref="plaintextToken" type="text" readonly :value="$plainTextToken"
              class="mt-4 bg-gray-100 px-4 py-2 rounded font-mono text-sm text-gray-500 w-full"
              autofocus autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"
              @showing-token-modal.window="setTimeout(() => $refs.plaintextToken.select(), 250)"
          />
      </x-slot>

      <x-slot name="footer">
          <x-jet-secondary-button wire:click="$set('displayingToken', false)" wire:loading.attr="disabled">
              {{ __('Close') }}
          </x-jet-secondary-button>
      </x-slot>
  </x-jet-dialog-modal>
  </div>

  
