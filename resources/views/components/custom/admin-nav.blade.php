<nav class="relative bg-cyan-600 shadow text-gray-900">
  <div class="container mx-auto flex justify-end">
    <ul class="flex mt-2">
      <li x-data="{ dropdownOpen: false }" class="relative pr-4 lg:mr-10 p-2">
        <button @click="dropdownOpen = ! dropdownOpen" class="flex items-center space-x-2 relative focus:outline-none">
          <h2 class="text-gray-700 text-sm hidden sm:block font-bold">{{ Auth::user()->name }}</h2>
          <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
        </button>

        <div class="absolute right-0 mt-2 w-48 bg-white rounded border overflow-hidden shadow-xl z-10" x-show="dropdownOpen"
          x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95"
          x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform"
          x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
          @click.away="dropdownOpen = false">
          <a href="{{ route('profile.show') }}"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Profile
          </a>
          <div class="border-t border-gray-200 hover:text-white"></div>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>
      </li>
    </ul>
  </div>
</nav>