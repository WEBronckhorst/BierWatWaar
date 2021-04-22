<?php use Carbon\Carbon; ?>
<x-guest-layout>

    @php
        $teller = rand(1, 5)
    @endphp

    <div class="" >
        @if ($event->tump != NULL || $event->tump != "")
        <div class="h-96 md:h-72 bg-blue-300 bg-cover shadow-xl shadow-md" style="background-image: url('{{ url('storage/cover/'.$event->tump) }}')">
        @else
        <div class="h-96 md:h-72 bg-blue-300 bg-cover shadow-xl shadow-md" style="background-image: url('{{ url('/img/demo/concert_'.$teller.'.jpg') }}')">
        @endif


        <div class="absolute bottom-0 left-0 pb-12">

        </div>
    </div>
    <div class="-top-10 relative rounded-2xl  shadow  bg-gray-100 rounded-1xl mx-10 z-20 " style="top:  -5.0rem">
        <div class="border-b border-gray-300 bg-gray-200 rounded-t-2xl pt-3 pb-5 px-3">
            <h1 class="   text-groen text-center text-3xl   inline-block">{{ $event->titel }}</h1>
            <h2 class="inline-block  text-center text-2xl font-light   ">{{ $event->sub_titel }}</h2>

        </div>
        <div class="relative block -mt-4 mb-5 px-3 w-full">

            <div class="uppercase float-left  border border-groen-dark bg-groen w-36 h-8 align-middle text-center rounded-md py-1  tracking-wide text-sm text-white font-semibold mb-2" style="padding-top: 6px;" >{{ Carbon::parse($event->stard_datum)->isoFormat('dd D MMM Y') }} </div>

                @if ($event->link_vvd != NULL || $event->link_vvd != "")
                <a href="{{ $event->link_vvd }}" target="_BLANK" class="uppercase float-right  bg-geel hover:bg-geel-dark hover:border-geel  border border-geel-dark w-36 h-8 px-1 text-center rounded-md py-1 tracking-wide text-sm text-white font-semibold mb-2" style="padding-top: 5px;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                    </svg>
                    Tickets
                </a>
                @else
                @endif
            </div>
        <div class="px-5 pt-7 pb-6">


                <p class="block">
                    {!! $event->description !!}
                </p>

        </div>
    </div>

    <div class="-top-10 relative  rounded-2xl max-w-md shadow mt-5 mx-auto bg-gray-100 rounded-1xl z-20 " style="top:  -4.0rem">

        <div class="px-5 py-6">

            <x-event_list_prise kop="Prijs (vvk)" andwoort="{{ $event->prijs_vvd }}">
            </x-event_list_prise>
            <x-event_list_prise kop="Prijs (add)" andwoort="{{ $event->prijs_add }}">
            </x-event_list_prise>
            <x-event_list_time kop="Zaal open" andwoort="{{ $event->stard_tijd }}">
            </x-event_list_time>

            <x-event_list_time kop="Aanvang" andwoort="{{ $event->aanvang_tijd }}">
            </x-event_lst_time>
            <x-event_list_time kop="Einde" andwoort="{{ $event->eind_tijd }}">
            </x-event_list_time>
            <x-event_list kop="Locatie" andwoort="{{ $event->prijs_add }}">
            </x-event_list>
            <x-event_list_link kop="Organisatie"  andwoort="{{ $event->organizations->naam }}" link="{{ route('organization', [ $event->organizations->slug ]) }}">
            </x-event_list_link>
            <x-event_list kop="Locatie" andwoort="{{ $event->organizations->adres }},{{ $event->organizations->postcode }} {{ $event->organizations->plaats }}">
            </x-event_list>
            <x-event_list kop="Genre" andwoort="Live muziek">
            </x-event_list>
            <x-event_list kop="Artiest" andwoort="Live muziek">
            </x-event_list>


        </div>
    </div>


    </div>

</x-app-layout>
