<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('events.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Event</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            id
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            title
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($events as $event)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $event->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $event->title }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('events.show', $event->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                                    <a href="{{ route('events.edit', $event->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                    <form class="inline block" action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                        </tbody>
                    </table>
                    {{ $events->links() }}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
