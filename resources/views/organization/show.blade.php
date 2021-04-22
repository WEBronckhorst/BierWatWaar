<?php use Carbon\Carbon; ?>
<x-guest-layout>
<div class="bg-gray-50 h-full  min-h-screen block">


    <div class="py-12">

    <div class="relative">
        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="relative shadow-xl sm:rounded-2xl overflow-hidden pb-48">
            <div class="absolute inset-0">
              <img class="h-full w-full object-cover" src="{{ url('storage/cover/'.$organization->tump) }}" alt="People working on laptops">
              <div class="absolute inset-0 bg- bg-black bg-opacity-40" style="mix-blend-mode: multiply;"></div>
            </div>
            <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">



            </div>

            </div>
          </div>
        </div>
      </div>
      <div class="mt-12  max-w-7xl  px-28 -top-80 max-w-lg mx-auto grid  lg:grid-cols-2 lg:max-w-none relative z-20 ">

      </div>
      <div class="mt-12   px-28 -top-80 max-w-lg mx-auto grid gap-6 lg:grid-cols-2 lg:max-w-none relative z-20 ">




        <div class="mt-1  mt-20 mx-auto">
            @php
        $teller = 0;
    @endphp
        @foreach ($events as $event)
        @php
           $teller =  $teller +1;
        @endphp

        <div class=" mx-auto  mb-5 bg-white rounded-xl shadow-md overflow-hidden " style="min-height: 210px;">

        <div class=" h-full inline-block" style="min-height: 210px;">
            <div class="h-full w-full inline-block"  style="min-height: 210px;">

                @if ($event->tump != NULL || $event->tump != "")
                    <a href="{{ route('event.show', [ $event->organizations->slug, $event->slug ]) }}" class=" ">
                        <div  class="h-full w-full  bg-cover  object-cover mbg-center"  style=" min-height: 230px; background-image: url('{{ url('storage/cover/'.$event->tump) }}')"></div>
                    </a>
                 @else
                    <a href="{{ route('event.show', [ $event->organizations->slug, $event->slug ]) }}"><img class="h-full w-full  object-cover md:w-44" src="{{url('/img/demo/concert_'.$teller.'.jpg')}}" alt="Man looking at item at a store"  style="min-height: 210px;"></a>
                @endif


            </div>
            <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-red-500 font-semibold">{{ Carbon::parse($event->stard_datum)->isoFormat('dd D MMM Y') }} </div>

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
        <div class="max-w-7xl mt-20 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">





                <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <div class="w-full h-28">
                            <div class="w-28 bg-cover bg-center float-left  h-28 rounded-full shadow-lg bg-gray-100" style="background-image: url('{{ url('storage/logo/logo_'.$organization->slug.'.png') }}')"></div>
                            <!-- ... -->
                            <div class=" ml-4 float-left w-auto h-28 blok">
                                <h1 class="text-3xl mt-7 leading-6 font-medium text-groen">
                                    {{ $organization->naam }}
                                </h1>
                                <p class="mt-1 max-w-2xl text-xl text-geel-dark">
                                    {{ $organization->plaats }}
                                </p></div>
                          </div>

                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                        <dl class="sm:divide-y sm:divide-gray-200">


                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                            Mail
                            </dt>
                            <dd class="mt-1 text-sm text-groen hover:text-groen-dark hover:underline sm:mt-0 sm:col-span-2">
                            <a href="mailto:{{ $organization->email }}">{{ $organization->email }}</a>
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                             Telefoon
                            </dt>
                            <dd class="mt-1 text-sm text-groen hover:text-groen-dark hover:underline sm:mt-0 sm:col-span-2">
                            <a href="tel:+{{ $organization->telefoon }}">{{ $organization->telefoon }}</a>
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                            Adres
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $organization->adres }}, {{ $organization->postcode }} {{ $organization->plaats }}<br/>
                            <a target="_BLANK" href="https://www.google.com/maps/dir/?api=1&destination={{ $organization->adres }},+{{ $organization->postcode }},+{{ $organization->plaats }}" class=" mt-2 inline-block bg-groen border-groen-dark border text-gray-50 hover:bg-groen-dark hover:border-groen rounded-md px-2 py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4  mr-1 mt-px inline-block " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                </svg>
                              <span class="">Routebeschrijving</span></a>
                            </dd>
                        </div>

                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                             kvk
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $organization->kvk }}
                            </dd>
                        </div>

                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                            About
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                            </dd>
                        </div>

                    </div>
                    </div>








            </div>
        </div>
    </div>
</div>
</x-app-layout>
