<?php use Carbon\Carbon; ?>
<x-guest-layout>


    <div class="py-12 pt-32 md:pt-5">
    @php
        $teller = 0;
    @endphp
        @foreach ($events as $event)
        @php
           $teller =  $teller +1;
        @endphp

        <div class="max-w-md mx-auto  mb-5 bg-white rounded-xl shadow-md overflow-hidden md:max-w-4xl" style="min-height: 210px;">

        <div class="md:flex h-full inline-block" style="min-height: 210px;">
            <div class="md:flex-shrink-0 h-full w-full md:w-auto inline-block"  style="min-height: 210px;">

                @if ($event->tump != NULL || $event->tump != "")
                    <a href="{{ route('event.show', [ $event->organizations->slug, $event->slug ]) }}" class=" ">
                        <div  class="h-full w-full  bg-cover  object-cover md:w-96 bg-center"  style=" min-height: 230px; background-image: url('{{ url('storage/cover/'.$event->tump) }}')"></div>
                    </a>
                 @else
                    <a href="{{ route('event.show', [ $event->organizations->slug, $event->slug ]) }}"><img class="h-full w-full  object-cover md:w-44" src="{{url('/img/demo/concert_'.$teller.'.jpg')}}" alt="Man looking at item at a store"  style="min-height: 210px;"></a>
                @endif


            </div>
            <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-red-500 font-semibold">{{ Carbon::parse($event->stard_datum)->isoFormat('dd D MMM Y') }} </div>
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                <a href="{{ route('organization', [ $event->organizations->slug ]) }}">
                {{ $event->organizations->naam }}
                </a>
            </div>
            <a href="{{ route('event.show', [ $event->organizations->slug, $event->slug ]) }}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{ $event->titel }}</a>
            <a href="{{ route('event.show', [ $event->organizations->slug, $event->slug ]) }}" class="block mt-1 text-sm leading-tight font-medium text-black hover:underline">{{ $event->sub_titel }}</a>

            <p class="mt-2 text-gray-500">{{ \Illuminate\Support\Str::limit($event->description, 150, $end='...') }}
            </p>
            </div>

        </div></a>
    </div>

        @endforeach
        <div class="max-w-md mx-auto  mb-5  rounded-xl  overflow-hidden md:max-w-4xl" >
            {{ $events->links() }}
        </div>
    </div>

</x-app-layout>
