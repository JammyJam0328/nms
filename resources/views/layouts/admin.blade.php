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

<body class="h-full font-sans ">
    {{-- <div id="app">
        <div>
            <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
            <div class="fixed inset-0 z-40 flex md:hidden"
                role="dialog"
                aria-modal="true">
                <!--
      Off-canvas menu overlay, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
                <div class="fixed inset-0 bg-gray-600 bg-opacity-75"
                    aria-hidden="true"></div>

                <!--
      Off-canvas menu, show/hide based on off-canvas menu state.

      Entering: "transition ease-in-out duration-300 transform"
        From: "-translate-x-full"
        To: "translate-x-0"
      Leaving: "transition ease-in-out duration-300 transform"
        From: "translate-x-0"
        To: "-translate-x-full"
    -->
                <div class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-emerald-700">
                    <!--
        Close button, show/hide based on off-canvas menu state.

        Entering: "ease-in-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
                    <div class="absolute top-0 right-0 pt-2 -mr-12">
                        <button type="button"
                            class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Close sidebar</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="w-6 h-6 text-white"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex items-center flex-shrink-0 px-4">
                        <img class="w-auto h-8"
                            src="https://tailwindui.com/img/logos/workflow-logo-emerald-300-mark-white-text.svg"
                            alt="Workflow">
                    </div>
                    <div class="flex-1 h-0 mt-5 overflow-y-auto">
                        <nav class="flex-1 px-2 pb-4 space-y-1">

                            <a href="#"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-emerald-600 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 mr-3 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>

                                Dashboard
                            </a>
                            <a href="#"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-emerald-600 group">
                                <!-- Heroicon name: outline/users -->
                                <svg class="flex-shrink-0 w-6 h-6 mr-3 text-white"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Accounts
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-emerald-600 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 mr-3 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                Meals
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-emerald-600 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 mr-3 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                </svg>
                                Charts
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-emerald-600 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 mr-3 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Reports
                            </a>

                        </nav>
                    </div>
                </div>

                <div class="flex-shrink-0 w-14"
                    aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>

            <!-- Static sidebar for desktop -->
            <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-emerald-500">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <h1 class="text-2xl font-extrabold text-center text-white">MADNAHS</h1>
                    </div>
                    <div class="flex flex-col flex-1 mt-5">
                        <nav class="flex-1 px-2 pb-4 space-y-1">

                            <a href="{{ route('admin.dashboard') }}"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-emerald-600 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 mr-3 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>

                                Dashboard
                            </a>
                            <a href="{{ route('admin.accounts') }}"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-emerald-600 group">
                                <!-- Heroicon name: outline/users -->
                                <svg class="flex-shrink-0 w-6 h-6 mr-3 text-white"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Advisers
                            </a>
                            <a href="{{ route('admin.students') }}"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-emerald-600 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 mr-3 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>
                                Students
                            </a>

                            <a href="{{ route('admin.meal-plan') }}"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-emerald-600 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 mr-3 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                Meal Plan
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-emerald-600 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 mr-3 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                </svg>
                                Charts
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-emerald-600 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 w-6 h-6 mr-3 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Reports
                            </a>

                        </nav>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-1 md:pl-64">
                <div class="sticky top-0 z-10 flex flex-shrink-0 h-16 bg-white shadow">
                    <button type="button"
                        class="px-4 text-gray-500 border-r border-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-emerald-500 md:hidden">
                        <span class="sr-only">Open sidebar</span>
                        <!-- Heroicon name: outline/menu-alt-2 -->
                        <svg class="w-6 h-6"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </button>
                    <div class="flex justify-end flex-1 px-4">

                        <div class="flex items-center ml-4 md:ml-6">

                            <!-- Profile dropdown -->
                            <div x-data="{isOpen:false}"
                                class="relative mr-3">
                                <div>
                                    <button x-on:click="isOpen=!isOpen"
                                        type="button"
                                        class="flex items-center max-w-xs text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500"
                                        id="user-menu-button"
                                        aria-expanded="false"
                                        aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <span class="font-bold uppercase">
                                            {{ auth()->user()->name }}</span>
                                    </button>
                                </div>
                                <div x-cloak
                                    x-show="isOpen"
                                    class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu"
                                    aria-orientation="vertical"
                                    aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem"
                                        tabindex="-1"
                                        id="user-menu-item-0">Your Profile</a>

                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem"
                                        tabindex="-1"
                                        id="user-menu-item-1">Settings</a>

                                    <!-- Authentication -->
                                    <form method="POST"
                                        action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <main>
                    <div class="py-6">
                        <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                            <h1 class="text-2xl font-semibold text-gray-900">@yield('header')</h1>
                        </div>
                        <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                            <div class="py-4">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </div> --}}




    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="fixed inset-0 z-40 flex md:hidden"
            role="dialog"
            aria-modal="true">
            <!--
        Off-canvas menu overlay, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75"
                aria-hidden="true"></div>

            <!--
        Off-canvas menu, show/hide based on off-canvas menu state.
  
        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
            <div class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-white">
                <!--
          Close button, show/hide based on off-canvas menu state.
  
          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
                <div class="absolute top-0 right-0 pt-2 -mr-12">
                    <button type="button"
                        class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="w-6 h-6 text-white"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex items-center flex-shrink-0 px-4">
                    <img class="w-auto h-8"
                        src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg"
                        alt="Workflow">
                </div>
                <div class="flex-1 h-0 mt-5 overflow-y-auto">
                    <nav class="relative px-2 space-y-1">
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 " -->
                        <a href="#"
                            class="flex items-center px-2 py-3 text-base font-medium text-gray-900 bg-gray-100 rounded-md group">
                            <!--
                Heroicon name: outline/home
  
                Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
              -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Dashboard
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-3 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 group">
                            <!-- Heroicon name: outline/users -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Team
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-3 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 group">
                            <!-- Heroicon name: outline/folder -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Projects
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-3 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 group">
                            <!-- Heroicon name: outline/calendar -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Calendar
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-3 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 group">
                            <!-- Heroicon name: outline/inbox -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                            Documents
                        </a>

                        <a href="#"
                            class="flex items-center px-2 py-3 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 group">
                            <!-- Heroicon name: outline/chart-bar -->
                            <svg class="flex-shrink-0 w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Reports
                        </a>
                        <div class="bottom-0 w-full py-2 text-sm text-center ">
                            Creative Tim : <span class="text-green-400">Tailwind CSS template</span>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="flex-shrink-0 w-14"
                aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div
                class="flex flex-col flex-grow pt-5 overflow-y-auto border-r border-gray-200 bg-gradient-to-b from-green-600 to-emerald-500">
                <div
                    class="flex items-center justify-center flex-shrink-0 px-4 py-4 mx-2 space-x-2 bg-white rounded-lg shadow-md">
                    <img class="w-auto h-8"
                        src="{{ asset('images/school.png') }}"
                        alt="Workflow">
                    <h1 class="text-2xl font-bold text-gray-700">MADNAHS</h1>
                </div>
                <div class="flex flex-col flex-grow mt-8">

                    <nav class="relative flex-1 px-2 space-y-3"
                        aria-label="Sidebar">
                        <h1 class="pl-1 text-sm font-bold uppercase border-b text-gray-50">Admin</h1>
                        <div>
                            <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 " -->
                            <a href="{{ route('admin.dashboard') }}"
                                class="{{ Request::routeIs('admin.dashboard') ? 'bg-white text-gray-800 border-gray-800' : '' }} hover:bg-white hover:text-gray-700 text-white border-b-2 uppercase font-bold group w-full flex items-end pl-2 py-2  rounded-md">
                                <!--
                            Heroicon name: outline/home
                
                            Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
                          -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="flex-shrink-0 mr-3 feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Dashboard
                            </a>
                        </div>

                        <div class="space-y-1"
                            x-data="{account: false}">
                            <h1 class="pl-1 text-xs border-b text-gray-50">Manage</h1>

                            <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 " -->
                            <button :class="account == true ? 'bg-white text-gray-700 border-green-900' : 'text-white'"
                                @click="account = !account"
                                type="button"
                                class=" hover:bg-white  {{ Request::routeIs('admin.accounts') || Request::routeIs('admin.students')? 'bg-white text-gray-800 border-green-900': '' }}  hover:text-gray-700 border-b-2 group w-full flex items-end uppercase pl-2 pr-1 py-2 text-left  font-bold rounded-md focus:outline-none"
                                aria-controls="sub-menu-1"
                                aria-expanded="false">
                                <!-- Heroicon name: outline/users -->

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="flex-shrink-0 w-6 h-6 mr-3 feather feather-users ">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9"
                                        cy="7"
                                        r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span class="flex-1">
                                    ACCOUNTS
                                </span>
                                <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    :class="account == true ? 'rotate-90 transform transition ease-in-out' : '' "
                                    class="flex-shrink-0 w-5 h-5 ml-3 feather feather-chevrons-right">
                                    <polyline points="13 17 18 12 13 7"></polyline>
                                    <polyline points="6 17 11 12 6 7"></polyline>
                                </svg>
                            </button>
                            <!-- Expandable link section, show/hide based on state. -->
                            <div x-show="account"
                                x-cloak
                                x-collapse>
                                <div class="bg-white divide-y shadow rounded-b-md "
                                    id="sub-menu-1">

                                    <a href="{{ route('admin.accounts') }}"
                                        class="{{ Request::routeIs('admin.accounts') ? 'bg-green-200' : '' }} text-gray-600  hover:bg-green-50 group flex items-center px-2 py-3 text-sm font-medium">
                                        <!-- Heroicon name: outline/users -->

                                        <span class="flex-1 pl-10 font-bold uppercase ">
                                            ADVISERS
                                        </span>

                                        <!-- Current: "bg-white", Default: "bg-gray-100 group-hover:bg-gray-200" -->
                                        
                                    </a>
                                    <a href="{{ route('admin.parents') }}"
                                        class="{{ Request::routeIs('admin.parents') ? 'bg-green-200' : '' }} flex items-center px-2 py-3 text-sm font-medium text-gray-600 hover:bg-green-50 group">
                                        <!-- Heroicon name: outline/users -->

                                        <span class="flex-1 pl-10 font-bold uppercase ">
                                            Parents
                                        </span>

                                        <!-- Current: "bg-white", Default: "bg-gray-100 group-hover:bg-gray-200" -->
                                       
                                    </a>
                                    <a href="{{ route('admin.students') }}"
                                        class="{{ Request::routeIs('admin.students') ? 'bg-green-200' : '' }} text-gray-600  rounded-b-md hover:bg-green-50 group flex items-center px-2 py-3 text-sm font-medium">
                                        <!-- Heroicon name: outline/users -->

                                        <span class="flex-1 pl-10 font-bold uppercase ">
                                            Students
                                        </span>

                                        <!-- Current: "bg-white", Default: "bg-gray-100 group-hover:bg-gray-200" -->
                                       
                                    </a>


                                </div>
                            </div>
                        </div>
                        <div class="space-y-1">

                            <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 " -->
                            <a href="{{ route('admin.meal-plan') }}"
                                class="{{ Request::routeIs('admin.meal-plan') ? 'bg-white text-gray-800 border-green-900' : '' }} hover:bg-white text-white  hover:text-gray-700 border-b-2 group w-full flex items-end uppercase pl-2 pr-1 py-2 text-left  font-bold rounded-md focus:outline-none"
                                aria-controls="sub-menu-1"
                                aria-expanded="false">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="flex-shrink-0 w-6 h-6 mr-3 feather feather-package">
                                    <line x1="16.5"
                                        y1="9.4"
                                        x2="7.5"
                                        y2="4.21"></line>
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12"
                                        y1="22.08"
                                        x2="12"
                                        y2="12"></line>
                                </svg>
                                <span class="flex-1">
                                    MEAL PLAN
                                </span>
                                <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                            </a>
                            <!-- Expandable link section, show/hide based on state. -->

                        </div>
                        <div class="space-y-1"
                            x-data="{chart: false}">

                            <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 " -->
                            <button :class="chart == true ? 'bg-white text-gray-700 border-green-900' : 'text-white'"
                                @click="chart = !chart"
                                type="button"
                                class="flex items-end w-full py-2 pl-2 pr-1 font-bold text-left uppercase border-b-2 rounded-md hover:bg-white hover:text-gray-700 group focus:outline-none"
                                aria-controls="sub-menu-1"
                                aria-expanded="false">
                                <!-- Heroicon name: outline/users -->

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="flex-shrink-0 w-6 h-6 mr-3 feather feather-pie-chart">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                </svg>
                                <span class="flex-1">
                                    CHARTS
                                </span>
                                <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    :class="chart == true ? 'rotate-90 transform transition ease-in-out' : '' "
                                    class="flex-shrink-0 w-5 h-5 ml-3 feather feather-chevrons-right">
                                    <polyline points="13 17 18 12 13 7"></polyline>
                                    <polyline points="6 17 11 12 6 7"></polyline>
                                </svg>
                            </button>
                            <!-- Expandable link section, show/hide based on state. -->
                            <div x-show="chart"
                                x-cloak
                                x-collapse
                                class="bg-white divide-y shadow rounded-b-md "
                                id="sub-menu-1">
                                <a href="#"
                                    class="flex items-center px-2 py-3 text-sm font-medium text-gray-600 hover:bg-green-50 group">
                                    <!-- Heroicon name: outline/users -->

                                    <span class="flex-1 pl-10 font-bold uppercase ">
                                        Nutritional Status
                                    </span>

                                    <!-- Current: "bg-white", Default: "bg-gray-100 group-hover:bg-gray-200" -->

                                </a>
                                <a href="#"
                                    class="flex items-center px-2 py-3 text-sm font-medium text-gray-600 hover:bg-green-50 group">
                                    <!-- Heroicon name: outline/users -->

                                    <span class="flex-1 pl-10 font-bold uppercase ">
                                        Height-for-Age
                                    </span>

                                    <!-- Current: "bg-white", Default: "bg-gray-100 group-hover:bg-gray-200" -->

                                </a>
                            </div>
                        </div>
                        <div class="space-y-1">

                            <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 " -->
                            <a href="{{route('admin.reports')}}"
                                class="{{ Request::routeIs('admin.reports') ? 'bg-white text-gray-800 border-green-900' : '' }} flex items-end w-full py-2 pl-2 pr-1 font-bold text-left text-white uppercase border-b-2 rounded-md hover:bg-white hover:text-gray-700 group focus:outline-none"
                                aria-controls="sub-menu-1"
                                aria-expanded="false">
                                <!-- Heroicon name: outline/users -->

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="flex-shrink-0 w-6 h-6 mr-3 feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16"
                                        y1="13"
                                        x2="8"
                                        y2="13"></line>
                                    <line x1="16"
                                        y1="17"
                                        x2="8"
                                        y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span class="flex-1">
                                    REPORTS
                                </span>
                                <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                            </a>
                            <!-- Expandable link section, show/hide based on state. -->

                        </div>
                        <span class="absolute text-sm text-white bottom-1">By: Creative Tim <span
                                class="italic">Tailwind CSS Template
                                2020</span></span>
                    </nav>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 md:pl-64">
            <div class="sticky top-0 z-10 flex flex-shrink-0 h-20 bg-white shadow">
                <button type="button"
                    class="px-4 text-gray-500 border-r border-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/menu-alt-2 -->
                    <svg class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </button>
                <div class="flex justify-between flex-1 px-6 py-2">
                    <div class="flex-1">
                        <div>

                            <div class="mt-5 md:flex md:items-center md:justify-between">
                                <div class="flex-1 min-w-0">
                                    <h2
                                        class="text-xl font-extrabold leading-7 text-green-900 uppercase sm:text-xl sm:truncate">
                                        Web Based Nutritional Monitoring and Recommender System
                                    </h2>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="flex items-center ml-4 md:ml-6">


                        <!-- Profile dropdown -->
                        <div class="relative ml-3"
                            x-data="{user:false}"
                            @click.away="user=false">
                            <div class="flex items-center border border-l-2 border-gray-600 rounded-l-full shadow-md">
                                <span
                                    class="px-2 ml-3 font-bold text-gray-800 uppercase">{{ auth()->user()->name }}</span>
                                <button @click="user=!user"
                                    type="button"
                                    class="px-2 py-2 text-white bg-green-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-chevron-down">
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
                            <div x-show="user"
                                x-cloak
                                x-collapse
                                class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu"
                                aria-orientation="vertical"
                                aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem"
                                    tabindex="-1"
                                    id="user-menu-item-0">Your Profile</a>

                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem"
                                    tabindex="-1"
                                    id="user-menu-item-1">Settings</a>

                                <form method="POST"
                                    action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
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
                    <div class="px-4 mx-auto mb-5 max-w-7xl sm:px-6 md:px-8">
                        <h1 class="text-2xl font-bold text-gray-800 uppercase">@yield('header')</h1>
                    </div>
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                        @yield('content')
                    </div>
                </div>

            </main>
        </div>
    </div>




    @livewireScripts
</body>

</html>
