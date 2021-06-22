<x-app-layout>

    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
    <form method="post" action="{{ route('events.store') }}">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <label for="organisor" class="block font-medium text-sm text-gray-700">Organiser</label>
                <input type="text" name="organisor" id="organisor" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                       value="{{ old('organiser', '') }}" />
                @error('organiser')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror

                <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                <input type="text" name="title" id="title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                       value="{{ old('title', '') }}" />
                @error('title')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror

                <label for="date_event" class="block font-medium text-sm text-gray-700">Date Event</label>
                <input type="text" name="date_event" id="date_event" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                       value="{{ old('date_event', '') }}" />
                @error('date_event')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror

                <label for="location" class="block font-medium text-sm text-gray-700">Location</label>
                <input type="text" name="location" id="location" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                       value="{{ old('location', '') }}" />
                @error('location')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror

                <label for="limit_visitors" class="block font-medium text-sm text-gray-700">Maximum number of visitors</label>
                <input type="text" name="limit_visitors" id="limit_visitors" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                       value="{{ old('limit_visitors', '') }}" />
                @error('limit_visitors')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror

                
                <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                <textarea type="text" name="description" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                       value="{{ old('description', '') }}"></textarea>
                @error('description')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
                
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Create</button>
            </div>
        </form>
    </div>
</div>
    </x-app-layout>