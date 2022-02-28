<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="h-full font-sans antialiased ">
    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">
            <!--
        Off-canvas menu overlay, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

            <!--
        Off-canvas menu, show/hide based on off-canvas menu state.
  
        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
            <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
                <!--
          Close button, show/hide based on off-canvas menu state.
  
          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button"
                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex-shrink-0 flex items-center px-4">
                    <img class="h-8 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg"
                        alt="Workflow">
                </div>
                <div class="mt-5 flex-1 h-0 overflow-y-auto">
                    <nav class="px-2 space-y-1">
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 " -->
                        <a href="#"
                            class="bg-gray-100 text-gray-900 group flex items-center px-2 py-3 text-base font-medium rounded-md">
                            <!--
                Heroicon name: outline/home
  
                Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
              -->
                            <svg class="text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Dashboard
                        </a>

                        <a href="#"
                            class="text-gray-600 hover:bg-gray-50  group flex items-center px-2 py-3 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/users -->
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Team
                        </a>

                        <a href="#"
                            class="text-gray-600 hover:bg-gray-50  group flex items-center px-2 py-3 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/folder -->
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Projects
                        </a>

                        <a href="#"
                            class="text-gray-600 hover:bg-gray-50  group flex items-center px-2 py-3 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/calendar -->
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Calendar
                        </a>

                        <a href="#"
                            class="text-gray-600 hover:bg-gray-50  group flex items-center px-2 py-3 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/inbox -->
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                            Documents
                        </a>

                        <a href="#"
                            class="text-gray-600 hover:bg-gray-50  group flex items-center px-2 py-3 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/chart-bar -->
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Reports
                        </a>
                    </nav>
                </div>
            </div>

            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div
                class="flex flex-col flex-grow border-r border-gray-200 pt-5 bg-gradient-to-b from-green-600 to-emerald-500 overflow-y-auto">
                <div
                    class="flex items-center justify-center space-x-2 flex-shrink-0 px-4 bg-white mx-2 py-4 rounded-lg shadow-md">
                    <img class="h-8 w-auto" src="{{ asset('images/school.png') }}" alt="Workflow">
                    <h1 class="font-bold text-gray-700 text-2xl">MADNAHS</h1>
                </div>
                <div class="mt-8 flex-grow flex flex-col">

                    <nav class="flex-1 px-2 space-y-3  " aria-label="Sidebar">
                        <h1 class="pl-1 text-sm border-b font-bold text-gray-50 uppercase">adviser</h1>
                        <div>
                            <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 " -->
                            <a href="{{ route('adviser.dashboard') }}"
                                class="{{ Request::routeIs('adviser.dashboard') ? 'bg-white text-gray-800 border-gray-800' : '' }} hover:bg-white hover:text-gray-700 text-white border-b-2 uppercase font-bold group w-full flex items-end pl-2 py-2  rounded-md">
                                <!--
                            Heroicon name: outline/home
                
                            Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
                          -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home mr-3 flex-shrink-0">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Dashboard
                            </a>
                        </div>


                        <div class="space-y-1">

                            <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 " -->
                            <a href="{{ route('adviser.my-students') }}"
                                class="{{ Request::routeIs('adviser.my-students')||Request::routeIs('adviser.my-section') ? 'bg-white text-gray-800 border-green-900' : '' }} hover:bg-white text-white  hover:text-gray-700 border-b-2 group w-full flex items-end uppercase pl-2 pr-1 py-2 text-left  font-bold rounded-md focus:outline-none"
                                aria-controls="sub-menu-1" aria-expanded="false">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user mr-3 flex-shrink-0 h-6 w-6">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="flex-1">
                                    STUDENTS
                                </span>
                                <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                            </a>
                            <!-- Expandable link section, show/hide based on state. -->

                        </div>

                    </nav>
                </div>
            </div>
        </div>
        <div class="md:pl-64 flex flex-col flex-1">
            <div class="sticky top-0 z-10 flex-shrink-0 flex h-20 bg-white shadow">
                <button type="button"
                    class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/menu-alt-2 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </button>
                <div class="flex-1 px-6 py-2 flex justify-between">
                    <div class="flex-1">
                        <div>

                            <div class="mt-5 md:flex md:items-center md:justify-between">
                                <div class="flex-1 min-w-0">
                                    <h2
                                        class="text-xl font-extrabold leading-7 text-green-900 sm:text-xl uppercase  sm:truncate">
                                        Web Based Nutritional Monitoring and Recommender System
                                    </h2>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">


                        <!-- Profile dropdown -->
                        <div class="ml-3 relative" x-data="{user:false}" @click.away="user=false">
                            <div class="flex border border-l-2  items-center shadow-md border-gray-600  rounded-l-full">
                                <span
                                    class="px-2 ml-3 uppercase font-bold text-gray-800">{{ auth()->user()->name }}</span>
                                <button @click="user=!user" type="button" class="bg-green-700 py-2 px-2 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </button>
                            </div>

                            <!--
        Dropdown menu, show/hide based on menu state.

        Entering: "transition ease-out duration-100"
          From: "transform opacity-0 scale-95"
          To: "transform opacity-100 scale-100"
        Leaving: "transition ease-in duration-75"
          From: "transform opacity-100 scale-100"
          To: "transform opacity-0 scale-95"
      -->
                            <div x-show="user" x-cloak x-collapse
                                class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-0">Your Profile</a>

                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="user-menu-item-1">Settings</a>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main class="flex-1">
                <div class="py-6">
                    <div class="max-w-7xl mb-5 mx-auto px-4 sm:px-6 md:px-8">
                        <h1 class="text-2xl font-bold uppercase text-gray-800">@yield('header')</h1>
                    </div>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>
    @livewireScripts
</body>

</html>
