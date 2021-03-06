<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Event
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('events.update', $event->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                            {{-- organiser --}}
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="organiser" class="block font-medium text-sm text-gray-700">Organiser</label>
                                <input type="text" name="organiser" id="organiser" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('organiser', $event->organiser) }}" />
                                @error('organiser')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- title --}}
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                            <input type="text" name="title" id="title" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('title', $event->title) }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            </div>

                        {{-- location --}}
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="location" class="block font-medium text-sm text-gray-700">Location</label>
                            <input type="text" name="location" id="location" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('location', $event->location) }}" />
                            @error('location')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- date time --}}
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="event-date" class="block font-medium text-sm text-gray-700">Date Event</label>
                            <input type="date" name="event_date" id="event-date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('event_date', $event->event_date) }}" />
                            @error('event_date')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- limit visitors --}}
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="visitor-limit" class="block font-medium text-sm text-gray-700">Visitors Limit</label>
                            <input type="number" name="visitor_limit" id="visitor-limit" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('visitor_limit', $event->visitor_limit) }}" />
                            @error('visitor_limit')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        

                        {{-- description --}}
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                            <input type="text" name="description" id="description" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('description', $event->description) }}" />
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- image --}}
                        {{-- <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="image" class="block font-medium text-sm text-gray-700">Image</label>
                            <input type="text" name="image" id="image"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('image', $event->image) }}" />
                            @error('image')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div> --}}

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>