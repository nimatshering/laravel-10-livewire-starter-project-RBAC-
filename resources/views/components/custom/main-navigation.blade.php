<!-- Header -->
<header class="header transition-all duration-300 z-50  bg-sky-800 shadow py-2">
  <div class="container-full lg:container mx-auto z-50 p-2" data-wow-delay="0.1s">
    <div x-data="{ open: false }" class="flex flex-col lg:flex-row lg:items-center lg:justify-between lg:gap-4">
      <div class="flex flex-row items-center justify-between">
        <a href="{{ route('landing') }}" class="group relative text-white font-bold">Home
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>
        <button class="rounded-lg lg:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <!-- navbar -->
      <nav :class="{'flex': open, 'hidden': !open}" class="lg:flex flex-col lg:flex-row flex-grow hidden pb-4 lg:pb-0  lg:justify-end lg:gap-4 items-center text-gray-50">
        <!-- Contact -->
        <a href="#" class="group relative text-white font-bold whitespace-nowrap">Contact
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>
      </nav>
    </div>
  </div>
</header>