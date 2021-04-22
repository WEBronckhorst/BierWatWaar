<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white">
  <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10 hidden md:block">
    <div>

    </div>
    <div class="-mr-2 -my-2 md:hidden">

      <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
        <span class="sr-only">Open menu</span>
        <!-- Heroicon name: outline/menu -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <div class="hidden md:flex-1 md:flex md:items-center md:justify-between">
        <a href="http://wetools.nl" class="flex">
            <span class="sr-only">Bier Wat Waar</span>
            <img class="h-8 w-auto sm:h-10" src="{{ url('/img/logo/Logo-Shadow.png') }}" alt="Bier wat waar">
          </a>
      <nav class="flex space-x-10">
        <div class="relative">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <a href="http://wetools.nl" class="text-base font-medium text-gray-500 hover:text-gray-900">
            Agenda
          </a>

          <!--
            'Solutions' flyout menu, show/hide based on flyout menu state.

            Entering: "transition ease-out duration-200"
              From: "opacity-0 translate-y-1"
              To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
              From: "opacity-100 translate-y-0"
              To: "opacity-0 translate-y-1"
          -->

        </div>
        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
          Over Ons
        </a>

        <div class="relative">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <button type="button" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-expanded="false">
            <span>Meer</span>
            <!--
              Heroicon name: solid/chevron-down

              Item active: "text-gray-600", Item inactive: "text-gray-400"
            -->
            <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>

          <!--
            'More' flyout menu, show/hide based on flyout menu state.

            Entering: "transition ease-out duration-200"
              From: "opacity-0 translate-y-1"
              To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
              From: "opacity-100 translate-y-0"
              To: "opacity-0 translate-y-1"
          -->


      </nav>
      <div class="flex items-center md:ml-12">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="http://wetools.nl" class="ml-8 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-groen-dark hover:bg-groen-dark">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-8 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-groen-dark hover:bg-groen-dark">Aanmelden</a>
                @endif
            @endif
        </div>
    @endif
      </div>
  </div>
</div>
  <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
  <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden z-50 absolute">
    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
      <div class="pt-5 pb-6 px-5">
        <div class="flex items-center justify-between">
          <div>
            <a href="{{ route('home') }}">
                <img class="h-11 w-auto" src="{{ url('/img/logo/Logo-Shadow.png') }}" alt="Workflow">
            </a>
          </div>
          <div class="-mr-2">
            <button type="button" id="showmenu" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-groen hover:text-gray-100 hover:bg-groen focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <span class="sr-only">show menu</span>
                <!-- Heroicon name: outline/x -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
              </button>
            <button type="button" id="closemenu" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-groen hover:text-gray-100 hover:bg-groen focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="mt-6 verbeg_mobile" >
          <nav class="grid gap-6" >
            <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
              <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/chart-bar -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
              </div>
              <div class="ml-4 text-base font-medium text-gray-900">
                Analytics
              </div>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
              <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/cursor-click -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                </svg>
              </div>
              <div class="ml-4 text-base font-medium text-gray-900">
                Engagement
              </div>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
              <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/shield-check -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <div class="ml-4 text-base font-medium text-gray-900">
                Security
              </div>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
              <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/view-grid -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
              </div>
              <div class="ml-4 text-base font-medium text-gray-900">
                Integrations
              </div>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
              <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/refresh -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
              </div>
              <div class="ml-4 text-base font-medium text-gray-900">
                Automations
              </div>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
              <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/document-report -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
              </div>
              <div class="ml-4 text-base font-medium text-gray-900">
                Reports
              </div>
            </a>
          </nav>
        </div>
      </div>
      <div class="py-6 px-5 verbeg_mobile">
        <div class="grid grid-cols-2 gap-4">
          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Pricing
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Docs
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Enterprise
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Help Center
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Guides
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Events
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Security
          </a>
        </div>
        <div class="mt-6">
          <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
            Sign up
          </a>
          <p class="mt-6 text-center text-base font-medium text-gray-500">
            Existing customer?
            <a href="#" class="text-indigo-600 hover:text-indigo-500">
              Sign in
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>



