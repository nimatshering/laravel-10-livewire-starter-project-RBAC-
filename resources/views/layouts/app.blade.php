<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partials._head')

 <body class="font-sans text-gray-800 antialiased">
  <section>
     {{-- <x-custom.top-header />
      <x-custom.admin-nav /> --}}
    <div x-data="{ sidebarOpen: false}">
      <div class="flex min-h-screen bg-white">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
          class="fixed z-20 inset-0 opacity-50 transition-opacity lg:hidden">
        </div>
        <!-- sidebar -->
           @can('is-admin')
            <x-custom.sidebar.admin-sidebar />
          @endcan
        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
          @can('is-admin')
           <x-custom.admin-top-header />
            <x-custom.admin-nav />
          @endcan

          <div class="flex items-center space-x-4 lg:space-x-0">
            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden p-4">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>

            <div class="container mx-auto px-2 mt-2">
              {{ $slot }}
            </div>
        </div>
      </div>
    </div>
  </section>
        @include('layouts.partials._scripts')
</body>
</html>
  
   