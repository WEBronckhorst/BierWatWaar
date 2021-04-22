<x-app-layout>
    <x-header linkTitel1=""  linktype1="" linkRoute1="admin.event.new" linkTitel2="new" linktype2="link" linkRoute2="admin.event.new">
    <span class="block">{{ __('Oganization') }}</span>
        <small class="block font-light base text-indigo-600">{{ __('index') }}</small>
    </x-header>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                titel
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                datum
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                tijd
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                status
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Odd row -->

                            @php
                                $number = 1;
                            @endphp
                            @foreach ($events as $event)

                            @php
                                $number ++
                            @endphp
                            @if ($number % 2 == 0)
                                <tr class="bg-white">
                            @else
                                <tr class="bg-gray-50">
                            @endif
                                 <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                 {{ $event->titel }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $event->organizations->naam }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $event->stard_datum }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                 {{ $event->stard_tijd }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            @if ($event->status == 1)
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                            @elseif ($event->status == 2)
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800">
                            @else
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                            @endif
                            {{ $status[$event->status] }}
                                </span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('admin.event.destroy', [ $event->id ]) }}"  class=" mr-2 inline-flex items-center px-2.5 py-1.5 border border-gray-100 shadow-sm text-xs font-medium rounded text-red-600 hover:text-red-900 bg-white hover:bg-red-50  hover:border-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">destroy</a>
                                <a href="{{ route('admin.event.edit', [ $event->id ]) }}" class=" mr-2 inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit</a>
                                <a href="{{ route('event.show', [ $event->organizations->slug, $event->slug ]) }}" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">show</a>

                            </td>
                            </tr>
                            @endforeach



                            <!-- More items... -->
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
