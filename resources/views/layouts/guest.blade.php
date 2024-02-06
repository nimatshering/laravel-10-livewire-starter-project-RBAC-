<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>Laravel 10 (Livewire) Starter Project </title>
      <!-- icon -->
      <link rel="shortcut icon" href="assets/img/favicon.ico" />
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

        {!! htmlScriptTagJsApi() !!}

      <!-- Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])

            {{-- @trixassets --}}
      <!-- Styles -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
          integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
          crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
          integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
          crossorigin="anonymous" />
      <link rel="stylesheet" href="{{ asset('css/ckeditor.css') }}">
      {{-- @livewireStyles --}}
        @stack('styles') 
    </head>

    <body class="text-gray-800 font-sans">
        <x-custom.top-header />
        <x-custom.main-navigation />
            <div class="font-sans">
                {{ $slot }}
            </div>
        <x-custom.footer /> 
     <!-- scroll to top -->
      <button id="to-top-button" onclick="goToTop()" title="croll to to"
        class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full shadow-md bg-orange-400 hover:bg-orange-600 text-white text-lg font-semibold transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
        </svg>
        <span class="sr-only">Go to top</span>
      </button>

      {{-- <div id="preloader"></div> --}}
      @include('layouts.partials._scripts')
     </body>    
</html>
