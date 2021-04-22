<x-app-layout>
<form class="space-y-6"action="{{ route('admin.organization.store') }}" enctype="multipart/form-data" autocomplete="on">
 @csrf
    <x-header linkTitel1="reset" linktype1="reset" linkRoute1="admin.organization.new" linkTitel2="save" linktype2="submit" linkRoute2="admin.organization.store">
        <span class="block">{{ __('Oganization') }}</span>
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
                    <label for="neame" class="block text-sm font-medium text-gray-700">Name</label>
                    <div class="mt-1">
                        <input type="text" name="neame" id="neame" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="FLOPHOUSE">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="mail@mail.nl">
                    </div>
                </div>
                <div class="mb-6">

                    <fieldset>
                        <label for="address" class="block text-sm font-medium text-gray-700">address</label>
                        <div class="mt-1 bg-white rounded-md shadow-sm -space-y-px">
                        <div>
                            <label for="adres" class="sr-only">Adres</label>
                            <input type="text" name="address" id="address" class="focus:ring-indigo-500 focus:border-indigo-500 relative block w-full rounded-none rounded-t-md bg-transparent focus:z-10 sm:text-sm border-gray-300" placeholder="Hooftstraat 7">
                        </div>
                        <div class="flex -space-x-px">
                            <div class="w-1/2 flex-1 min-w-0">
                            <label for="card-expiration-date" class="sr-only">zip</label>
                            <input type="text" name="zip" id="card-expiration-date" class="focus:ring-indigo-500 focus:border-indigo-500 relative block w-full rounded-none  bg-transparent focus:z-10 sm:text-sm border-gray-300" placeholder="7007 CB">
                            </div>
                            <div class="flex-1 min-w-0">
                            <label for="card-cvc" class="sr-only">city</label>
                            <input type="text" name="city" id="city" class="focus:ring-indigo-500 focus:border-indigo-500 relative block w-full rounded-none  bg-transparent focus:z-10 sm:text-sm border-gray-300" placeholder="Arnhem">
                            </div>
                        </div>
                        <div>
                            <label for="land" class="sr-only">land</label>
                            <input type="text" name="land" id="land" class="focus:ring-indigo-500 focus:border-indigo-500 relative block w-full rounded-none rounded-b-md bg-transparent focus:z-10 sm:text-sm border-gray-300" placeholder="Land">
                        </div>
                        </div>
                    </fieldset>
                </div>
                <div class="mb-6">
                    <label for="phone" class="block text-sm font-medium text-gray-700">phone</label>
                    <div class="mt-1">
                        <input type="text" name="phone" id="phone" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="(+31) 314 - 45 894 545">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="kvk" class="block text-sm font-medium text-gray-700">kvk</label>
                    <div class="mt-1">
                        <input type="text" name="kvk" id="kvk" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="123456789">
                    </div>
                </div>
                


                </div>
          </div>
          <!-- End main area -->
        </div>
      </div>
    </div>

    <div class="pr-4 sm:pr-6 lg:pr-8 lg:flex-shrink-0 lg:border-l lg:border-gray-200 xl:pr-0">
      <div class="h-full pl-6 py-6 lg:w-80">
        <!-- Start right column area -->
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white mb-5 overflow-hidden shadow rounded-lg"  style="min-height: 15rem;">
            <div class="px-4 py-5 sm:p-6">
                <!-- Content goes here -->
            </div>
            </div>
            <div class="bg-white mb-5 overflow-hidden shadow rounded-lg"  style="min-height: 22rem;">
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
