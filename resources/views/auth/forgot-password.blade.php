<x-guest-layout>
  <div class="container min-h-screen mt-10 mx-auto max-w-md">
    <h1 class="font-bold text-xl text-center">Forgot password!</h1>
    <div class="w-full  px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

          <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="btn-blue">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
        
    </div>
  </div>
</x-guest-layout>