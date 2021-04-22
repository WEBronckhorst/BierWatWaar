<x-app-layout>
@php
    function maaknummer($nummer){
           return number_format($nummer, 2, ',', '');
        }
@endphp
<form class="space-y-6" method="post"  action="{{ route('admin.event.update', [$event->id]) }}" enctype="multipart/form-data" autocomplete="on">
 @csrf
    <x-header linkTitel1="reset" linktype1="reset" linkRoute1="admin.event.upade" linkTitel2="save" linktype2="submit" linkRoute2="admin.event.update">
        <span class="block">{{ __('Event') }}</span>
        <small class="block font-light base text-indigo-600">{{ __('new') }}</small>

    </x-header>



        <!-- 3 column wrapper -->
  <div class="flex-grow w-full max-w-7xl mx-auto xl:px-8 lg:flex">
    <!-- Left sidebar & main wrapper -->
    <div class="flex-1 min-w-0 xl:flex">

      <div class="lg:min-w-0 lg:flex-1">
        <div class="h-full py-6 sm:px-6 ">
          <!-- Start main area-->
          <div class="relative h-full" style="min-height: 36rem;">
            <div class="space-y-6">
                <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                <div class="mb-6">
                    <label for="neame" class="block text-sm font-medium text-gray-700">Titel event</label>
                    <div class="mt-1">
                        <input type="text" name="neame" id="neame" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Zwattecross"  value="{{ $event->titel }}">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="sub_titel" class="block text-sm font-medium text-gray-700">Sub titel</label>
                    <div class="mt-1">
                        <input type="text" name="sub_titel" id="sub_titel" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Met de Kisjeskearls"  value="{{ $event->sub_titel }}">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <div class="mt-1">
        <textarea id="description" name="description" rows="15" class="shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">{{ $event->description }}</textarea>

                    </div>
                </div>





                </div>
          </div>

          <div class=" mt-5 bg-white mb-5 overflow-hidden shadow rounded-lg"  >
            <div class="px-4 py-5 sm:p-6">
                <h2 class="text-indigo-800 text-2xl mb-3">Social links</h2>
                <div class="mb-6">
                    <label for="link_fb_event" class="block  text-sm font-medium text-gray-700">Facebook event link</label>
                    <div class="mt-1">
                        <input type="text" name="link_fb_event" id="link_fb_event" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Met de Kisjeskearls"  value="{{ $event->link_fb_event }}">
                    </div>
                </div>
            </div>
            </div>
          <!-- End main area -->
        </div>
      </div>

    </div>

    <div class="pr-4 sm:pr-6 lg:pr-8 lg:flex-shrink-0 lg:border-l  lg:border-gray-200 xl:pr-0">
      <div class="h-full pl-6 py-6 lg:w-80">
        <!-- Start right column area -->
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white  op mb-5 overflow-hidden shadow rounded-lg"  style="min-height: 15rem;">
            <div class="px-4 py-5 sm:p-6">
               <h2 class="text-indigo-800 text-2xl   mb-3">Datum en tijd</h2>
               <div class="mb-4">
                    <label for="event_date" class="block text-sm font-medium text-gray-700">Event date </label>
                    <div class="mt-1">
                        <input type="date" name="event_date" id="event_date" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="21:07:2021" value="{{ $event->stard_datum }}">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="aanvang_tijd" class="block text-sm font-medium text-gray-700">Aanavng tijd</label>
                    <div class="mt-1">
                        <input type="time" name="aanvang_tijd" id="aanvang_tijd" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="mail@mail.nl" value="{{ $event->aanvang_tijd }}">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="event_tijd" class="block text-sm font-medium text-gray-700">deuren opem</label>
                    <div class="mt-1">
                        <input type="time" name="event_tijd" id="event_tijd" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="mail@mail.nl" value="{{ $event->stard_tijd }}">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="eind_tijd" class="block text-sm font-medium text-gray-700">Eind tijd</label>
                    <div class="mt-1">
                        <input type="time" name="eind_tijd" id="eind_tijd" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="mail@mail.nl"  value="{{ $event->eind_tijd }}">
                    </div>
                </div>
            </div>
            </div>
            <div class="bg-white  op mb-5 overflow-hidden shadow rounded-lg"  style="min-height: 15rem;">
            <div class="px-4 py-5 sm:p-6">
                <h2 class="text-indigo-800 text-2xl   mb-3">Prijsen en tickits</h2>
                <div class="mb-4">
                <label for="prijs_add" class="block text-sm font-medium text-gray-700">Prijs ADD</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">
                            €
                        </span>
                        </div>
                        <input type="text" name="prijs_add" id="prijs_add" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00" aria-describedby="price-currency" value="{{ maaknummer($event->prijs_add) }}">

                    </div>
                </div>
                <div class="mb-4">
                 <label for="prijs_vvd" class="block text-sm font-medium text-gray-700">Prijs VVK</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">
                            €
                        </span>
                        </div>
                        <input type="text" name="prijs_vvd" id="prijs_vvd" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00" aria-describedby="price-currency" value="{{ maaknummer($event->prijs_vvd) }}">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="link_vvd" class="block text-sm font-medium text-gray-700">Tickit link</label>
                    <div class="mt-1">
                        <input type="url" name="link_vvd" id="link_vvd" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="mail@mail.nl" value="{{ $event->link_vvd }}">
                    </div>
                </div>


            </div>
            </div>
            <div class="bg-white  op mb-5 overflow-hidden shadow rounded-lg"  style="min-height: 15rem;">
                <div class="px-4 py-5 sm:p-6">
                    <h2 class="text-indigo-800 text-2xl   mb-3">Cover foto</h2>
                    <div class="mb-4">
                        <div class="mb-6">
                            <div>
                                <img src="{{ url('storage/cover/'.$event->tump) }}" alt="">
                            </div>




                               <label for="file" class="block text-sm font-medium text-gray-700">uplode</label>
                               <div class="mt-1">
                                   <input type="file" name="photo" id="sub_titel" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Met de Kisjeskearls"  value="{{ $event->sub_titel }}">
                               </div>
                           </div>



                </div>
                </div>


        <!-- End right column area -->
      </div>
    </div>
  </div>
</div>
</form>
</x-app-layout>
