<!DOCTYPE html>
<html class="h-full bg-gray-100"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet"
        href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"
        defer></script>
</head>

<body class="h-full font-sans antialiased ">
   <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
    <header class="bg-white shadow sticky top-0 z-10">
      <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex px-2 lg:px-0">
            <div class="flex-shrink-0 flex items-center">
              <a href="#">
                {{-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg" alt="Workflow"> --}}
            <h1 class="font-extrabold text-green-500 text-2xl ">MADNHS</h1>
            </a>
            </div>
            
          </div>
        
          <div class="flex items-center lg:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <!-- Heroicon name: outline/menu -->
              <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
  
          
  
          <div class="hidden lg:ml-4 lg:flex lg:items-center">
          
            <!-- Profile dropdown -->
            <div class="ml-4 relative flex-shrink-0">
             
            </div>
          </div>
        </div>
      </div>
  
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
     
      </div>
    </header>
  
    <main class="py-10">
      <!-- Page header -->
      <div class="max-w-3xl mx-auto px-4 sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8">
        <div class="flex items-center space-x-5">
          <div class="flex-shrink-0">
            <div class="relative">
              <img class="h-16 w-16 border border-green-500 rounded-full" src="{{auth()->user()->profile_photo_url}}" alt="">
              <span class="absolute inset-0 shadow-inner rounded-full" aria-hidden="true"></span>
            </div>
          </div>
          <div>
            <h1 class="text-2xl font-bold text-gray-800 uppercase">{{auth()->user()->name}}</h1>
            <p class="text-sm font-medium text-gray-500">Applied for <a href="#" class="text-gray-900">Front End Developer</a> on <time datetime="2020-08-25">August 25, 2020</time></p>
          </div>
        </div>
        <div class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3">
          <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">Logout</button>
        </div>
      </div>
  
      @yield('body')
    </main>
  </div>
  
    @livewireScripts
</body>

</html>
