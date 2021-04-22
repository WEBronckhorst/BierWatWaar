@props(['linkTitel1', 'linktype1', 'linkRoute1', 'linkTitel2', 'linktype2', 'linkRoute2'])

<header class="bg-white shadow">
    <div class="md:flex md:items-center md:justify-between max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="flex-1 min-w-0">
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
            {{ $slot }}
        </h2>
    </div>

    <div class="mt-4 flex md:mt-0 md:ml-4">
        @if ($linkTitel1 != "")
            @if ($linktype1 == "" || $linktype1 == "link")
                <a class="inline-flex mr-2 inline-flex rounded-md shadow items-center justify-center px-5 py-3 border border-transparent text-base font-normal rounded-md text-indigo-600 bg-white hover:bg-indigo-50" href="{{ Route($linkRoute1) }}">
                    {{ $linkTitel1 }}
                </a>
            @else
                <button type="{{ $linktype1 }}" class="inline-flex mr-2 inline-flex rounded-md shadow items-center justify-center px-5 py-3 border border-transparent text-base font-normal rounded-md text-indigo-600 bg-white hover:bg-indigo-50" >
                    {{ $linkTitel1 }}
                </button>
            @endif
        @endif
        @if ($linkTitel2 != "")
            @if ($linktype2 == "" || $linktype2 == "link")
                <a class="nline-flex inline-flex rounded-md shadow items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"  href="{{ Route($linkRoute2) }}">
                    {{ $linkTitel2 }}
                </a>
            @else
                <button type="{{ $linktype2 }}" class="nline-flex inline-flex rounded-md shadow items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700" >
                    {{ $linkTitel2 }}
                </button>
            @endif
        @endif
    </div>
    </div>

</header>
