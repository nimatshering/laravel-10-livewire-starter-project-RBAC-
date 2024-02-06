<x-guest-layout>
<body class="font-OpenSans">
  <div class="mt-4 text-center">
    <h1 class="font-bold text-xl uppercase">Laravel 10 Start Project</h1>
  </div>
  <section class="py-10 lg:mb-10">
    <div class="container mx-auto lg:w-4/12">
          <div class="shadow-lg border rounded-lg px-4 py-2 w-full ">
            <h1 class="border-b py-2 text-sm font-bold text-gray-700">LOGIN </h1>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mt-2">
                  <x-label for="email" value="{{ __('Email') }}" />
                    <input id="email" class="form-control text-gray-700 mt-2 block w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                    <x-input-error for="email" class="mt-2" />
                  </div>

              <div class="mt-2">
                  <x-label for="password" class="text-gray-700" value="{{ __('Password') }}" />
                  <input id="password" class="form-control mt-2 block w-full text-gray-700" type="password" name="password" placeholder="Password" required autocomplete="off" />
                    <x-input-error for="password" class="mt-2" />
                </div>

              <div class="block mt-2">
                  <label for="remember_me" class="flex items-center">
                      <x-checkbox id="remember_me" name="remember" />
                      <span class="ml-2 text-sm text-gray-700">{{ __('Remember me') }}</span>
                  </label>
              </div>

              <div class="my-4 text-center">
                  <x-button class="ml-4" class="w-full flex justify-center px-10 py-2 text-center font-bold text-white bg-sky-800 rounded-full hover:bg-sky-700">
                      {{ __('Log in') }}
                  </x-button>
              </div>

              <div class="flex items-center justify-center">
                  @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
              </div>
            </form>

            <div class="my-4 text-center">
              <span class="text-xs font-bold py-2 text-gray-700">New User?</span>
                <div class="w-full my-2">
                  <a href="{{ route('register')}}"
                    class="w-full flex items-center justify-center px-4 py-2 font-bold uppercase text-xs bg-sky-800 rounded hover:bg-sky-700 focus:outline-none focus:shadow-outline">
                    <div class="mr-4 text-white">Register</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-bounce w-6 h-6 text-white">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
                    </svg>
                  </a>
                </div>
            </div>
        </div>
    </div>
  </section>
</body>
</x-guest-layout>
