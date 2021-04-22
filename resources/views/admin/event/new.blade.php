<x-app-layout>
<form class="space-y-6"action="{{ route('admin.event.store') }}" enctype="multipart/form-data" autocomplete="on">
 @csrf
    <x-header linkTitel1="reset" linktype1="reset" linkRoute1="admin.event.new" linkTitel2="save" linktype2="submit" linkRoute2="admin.event.store">
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
                        <input type="text" name="neame" id="neame" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Zwattecross">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="organization_id" class="block text-sm font-medium text-gray-700">Organization</label>
                    <select id="organization_id" name="organization_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    @foreach ($organizations as $organization)
                        <option value="{{ $organization->id }}">{{ $organization->naam }} </option>
                    @endforeach

                    </select>
                </div>
                <div class="mb-6">
                    <label for="event_date" class="block text-sm font-medium text-gray-700">Event date </label>
                    <div class="mt-1">
                        <input type="date" name="event_date" id="event_date" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="21:07:2021">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="aanvang_tijd" class="block text-sm font-medium text-gray-700">Aanavng tijd</label>
                    <div class="mt-1">
                        <input type="time" name="aanvang_tijd" id="aanvang_tijd" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="mail@mail.nl">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="event_tijd" class="block text-sm font-medium text-gray-700">deuren opem</label>
                    <div class="mt-1">
                        <input type="time" name="event_tijd" id="event_tijd" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="mail@mail.nl">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="eind_tijd" class="block text-sm font-medium text-gray-700">Eind tijd</label>
                    <div class="mt-1">
                        <input type="time" name="eind_tijd" id="eind_tijd" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="mail@mail.nl">
                    </div>
                </div>



                </div>
          </div>
          <!-- End main area -->
        </div>
      </div>
    </div>

    <div class="pr-4 sm:pr-6 lg:pr-8 lg:flex-shrink-0 lg:border-l bg-opacity-40 lg:border-gray-200 xl:pr-0">
      <div class="h-full pl-6 py-6 lg:w-80">
        <!-- Start right column area -->
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white opacity-40 op mb-5 overflow-hidden shadow rounded-lg"  style="min-height: 15rem;">
            <div class="px-4 py-5 sm:p-6">
                <!-- Content goes here -->
            </div>
            </div>
            <div class="opacity-40 bg-white mb-5 overflow-hidden shadow rounded-lg"  style="min-height: 22rem;">
            <div class="px-4 py-5 sm:p-6">
                <!-- Content goes here -->
            </div>
            </div>


        <!-- End right column area -->
      </div>
    </div>
  </div>
</div>
</form>
</x-app-layout>
