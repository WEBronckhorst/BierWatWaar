<?php use Carbon\Carbon; ?>
<x-guest-layout>

    @php
        $teller = rand(1, 5)
    @endphp



    <div class="py-12 " >
        <div class="h-72 bg-blue-300 bg-cover shadow-xl relative z-10" style="background-image: url('{{ url('/img/demo/concert_'.$teller.'.jpg') }}')">
        <div class="absolute bottom-0 left-0 pb-12">
            <h1 class="bg-black uppercase bg-opacity-80 pt-2 pb-3 px-8 backdrop-filter backdrop-blur text-indigo-300 text-center text-3xl font-bold  inline-block  mb-2">{{ $event->titel }}</h1>
            <h2 class=" bg-indigo-800 inline-block bg-opacity-60 backdrop-filter backdrop-blur pt-2 pb-2 px-8 text-gray-100 text-center text-1xl font-extrabold  mb-2">{{ $event->sub_titel }}</h2>
        </div>
    </div>
    <div class="-top-6 relative rounded-2xl h-60  bg-gray-100 rounded-1xl  mx-10 z-20 " style="top:  -2.0rem">
    
        {{ $event->titel }}
    </div>


    </div>

</x-app-layout>
