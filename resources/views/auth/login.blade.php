{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MADNHS</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-mainback">
        <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
           
          
            <div class="mt-20 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-green-500 h-3"></div>
                <div class="bg-gray-100 shadow flex justify-center space-x-2 py-3">
                    <img src="{{asset('images/school.png')}}" class="flex-shrink-0" alt="">
                    <h1 class="text-2xl text-gray-700 font-bold ">MADNHS</h1>
                </div>
                
              <div class="bg-white py-10 px-4   sm:px-10">
                <div class="">
                    <h1 class="text-lg font-bold text-gray-700">Sign In to your Account.</h1>
                </div>
                <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="mt-6">
            @csrf

            <div class="relative border border-gray-700  rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-gray-700 focus-within:border-gray-700">
                <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-sm font-semibold text-gray-800">Email</label>
                <input id="email"  type="email" name="email" :value="old('email')" required autofocus class="block w-full h-8 border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" >
              </div>
            <div class="relative border mt-5 border-gray-700     rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-gray-700 focus-within:border-gray-700">
                <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-sm font-semibold text-gray-800">Password</label>
                <input id="password"  type="password" name="password" required autocomplete="current-password"
                class="block w-full h-8 border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" >
              </div>
              <button type="submit" class="mt-8 bg-gray-700 w-full p-2 rounded-md shadow text-white uppercase font-bold mb-10">Sign In</button>

            {{-- <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            {{-- <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div> --}}
        </form>
          
               
              </div>
            </div>
          </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
