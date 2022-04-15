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
                        <button type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                            aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="block h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
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
            <div
                class="max-w-3xl mx-auto px-4 sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8">
                <div class="flex items-center space-x-5">
                    <div class="flex-shrink-0">
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-16 w-16"
                                version="1.0"
                                viewBox="0 0 110 110">
                                <circle cx="55"
                                    cy="55"
                                    r="55"
                                    fill="#FABC3D" />
                                <path fill="#E2E4E5"
                                    d="M67 67.997l-2-1H45l-2 1L55 87z" />
                                <path fill="#F8E1C2"
                                    d="M70 45c-1 0-1 1.111-1 1.111V45a65.207 65.207 0 0 0-.067-3.062C64.891 38.001 55 38 55 38s-9.891.001-13.933 3.938A65.207 65.207 0 0 0 41 45v7.997l4 10 5.105 3.996a2.999 2.999 0 0 0 2.24 1.004h5.31c.856 0 1.671-.365 2.24-1.004L65 62.997l3.207-8.017C71.042 54.776 72 50.476 72 47.222 72 46.111 71 45 70 45z" />
                                <path fill="#FCF1E2"
                                    d="M41 45v1.111S41 45 40 45s-2 1.111-2 2.222c0 3.253.958 7.554 3.793 7.758L45 62.997l5.105 3.996a2.999 2.999 0 0 0 2.24 1.004H55V38s-9.891.001-13.933 3.938A65.207 65.207 0 0 0 41 45z" />
                                <path fill="#F79392"
                                    d="M50 56.997h10s0 3-5 3-5-3-5-3z" />
                                <path fill="#3E3E3F"
                                    d="M61 47.322c1.191 0 2.248.266 2.981.678.071-.569-.172-1.154-.748-1.59-1.03-.781-2.702-.781-3.733 0-.464.352-.709.801-.753 1.26A7.068 7.068 0 0161 47.322zM48.993 47.322c-1.191 0-2.248.266-2.981.678-.071-.569.172-1.154.748-1.59 1.03-.781 2.702-.781 3.733 0 .464.352.709.801.753 1.26a7.068 7.068 0 00-2.253-.348z" />
                                <path fill="#F4D0A1"
                                    d="M57.655 67.997h-5.31a2.999 2.999 0 0 1-2.24-1.004L45 62.997v4.5s0 7.5 10 7.5 10-7.5 10-7.5v-4.5l-5.105 3.996a2.999 2.999 0 0 1-2.24 1.004z" />
                                <g fill="#3E3E3F">
                                    <path
                                        d="M55 38s-.758 0-1.938.083v5.625c3.719 0 5.972-2.684 7.274-5.234C57.41 38.001 55 38 55 38zM45.919 39.332c-1.897.59-3.691 1.44-4.919 2.668 0 3.542 2.323 5.25 2.323 5.25-.294-2.956-.31-4.882 2.596-7.918zM46.865 39.062v4.647c2.865 0 5.149-4.054 5.918-5.604-1.565.121-3.756.385-5.918.957zM66.344 40.205v7.045c2.488 0 2.646-4.661 2.655-5.25-.721-.722-1.638-1.311-2.655-1.795zM61.917 38.771v4.938c3.354 0 4.325-3.171 4.418-3.508-1.367-.65-2.914-1.108-4.418-1.43z" />
                                </g>
                                <path fill="#F8E1C2"
                                    d="M50.105 66.993L45 62.997v4.5s0 7.5 10 7.5v-7h-2.655a2.999 2.999 0 0 1-2.24-1.004z" />
                                <path fill="#FA5655"
                                    d="M34.491 53.445v-19.62a166.26 166.26 0 0 1-2-.728v20.348c-2.61 1.72-1 6.85-1 9.555h4c0-2.705 1.611-7.835-1-9.555z" />
                                <path fill="#3E3E3F"
                                    d="M82 31c0-1-25-8-27-8s-27 7-27 8c0 .625 7.432 3.207 13 5.053V42c4-4 14-4 14-4s10 0 14 4v-5.947c5.568-1.846 13-4.428 13-5.053z" />
                                <path fill="#FFF"
                                    d="M66.965 68.059L67 68l-2-1-9.985 4.981 5.793 5.826z" />
                                <path fill="#DF2C2C"
                                    d="M59 87l-2.799-10.2L58 75.002l-3.019-3.024-2.998 2.998 1.818 1.817L51 87z" />
                                <path fill="#FA5655"
                                    d="M55 87V71.997l-.019-.019-2.998 2.998 1.818 1.817L51 87z" />
                                <path fill="#FFF"
                                    d="M43.035 68.059L43 68l2-1 9.985 4.981-5.793 5.826z" />
                                <path fill="#3E3E3F"
                                    d="M23 87l4-11a6.002 6.002 0 013.043-2.983L43 68l12 19H23zM87 87l-4-11a6.002 6.002 0 00-3.043-2.983L67 68 55 87h32z" />
                                <path fill="#9E9FA0"
                                    d="M55 87L43 68l-9 3 17 16zM55 87l12-19 9 3-17 16z" />
                            </svg>
                            <span class="absolute inset-0 shadow-inner rounded-full"
                                aria-hidden="true"></span>
                        </div>
                    </div>
                    <div>
                       <div class="flex flex-col">
                        <h1 class="text-2xl font-bold text-gray-800 uppercase">{{ auth()->user()->name }}</h1>
                       <a href="{{route('student.profile')}}" class="bg-green-700 w-auto text-white py-1 rounded-full">
                        <div class="flex justify-center items-center space-x-1 px-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                              </svg>
                            <span class="text-xs font-semibold">Manage Information</span>
                           </div>
                       </a>
                       </div>
                    </div>
                </div>
                <div
                    class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3">
                    <form method="POST"
                        action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
          this.closest('form').submit();"
                            class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">Logout</a>

                    </form>
                </div>
            </div>

            @yield('body')
        </main>
    </div>

    @livewireScripts
    @stack('scripts')
</body>

</html>
