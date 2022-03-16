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
        <header class="sticky top-0 z-10 bg-white shadow">
            <div class="px-2 mx-auto max-w-7xl sm:px-4 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex px-2 lg:px-0">
                        <div class="flex items-center flex-shrink-0">
                            <a href="#">
                                {{-- <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg" alt="Workflow"> --}}
                                <h1 class="text-2xl font-extrabold text-green-500 ">MADNHS</h1>
                            </a>
                        </div>

                    </div>

                    <div class="flex items-center lg:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                            aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="block w-6 h-6"
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
                        <div class="relative flex-shrink-0 ml-4">

                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 mx-auto max-w-7xl sm:px-6">

            </div>
        </header>

        <main class="py-10">
            <!-- Page header -->
            <div
                class="max-w-3xl px-4 mx-auto sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8">
                <div class="flex items-center space-x-5">
                    <div class="flex-shrink-0">
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-16 h-16"
                                viewBox="0 0 26 26">
                                <g fill="#fff"
                                    transform="translate(5 -1031.362)">
                                    <circle cx="8"
                                        cy="1044.362"
                                        r="13"
                                        fill="#ef4c45" />
                                    <path fill="#df2209"
                                        style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                        d="M 16.771484 25.427734 A 12.999996 12.999996 0 0 0 17.710938 25.117188 A 12.999996 12.999996 0 0 0 18.896484 24.585938 A 12.999996 12.999996 0 0 0 20.023438 23.939453 A 12.999996 12.999996 0 0 0 21.080078 23.183594 A 12.999996 12.999996 0 0 0 22.056641 22.326172 A 12.999996 12.999996 0 0 0 22.943359 21.375 A 12.999996 12.999996 0 0 0 23.728516 20.339844 A 12.999996 12.999996 0 0 0 24.408203 19.232422 A 12.999996 12.999996 0 0 0 24.974609 18.0625 A 12.999996 12.999996 0 0 0 25.419922 16.841797 A 12.999996 12.999996 0 0 0 25.740234 15.582031 A 12.999996 12.999996 0 0 0 25.935547 14.296875 A 12.999996 12.999996 0 0 0 25.955078 13.904297 L 19.537109 7.4863281 L 19.46875 7.4160156 C 19.352688 7.2999582 19.216277 7.2076563 19.089844 7.1035156 C 18.980049 7.0130242 18.878742 6.9128886 18.761719 6.8320312 C 18.641411 6.7489316 18.508208 6.6875122 18.380859 6.6152344 C 18.222382 6.5252578 18.070678 6.4256001 17.902344 6.3535156 C 17.609239 6.2280015 17.302519 6.1305133 16.984375 6.0644531 C 16.920836 6.0512578 16.855406 6.0438686 16.791016 6.0332031 C 16.698311 6.0178424 16.606065 6.000218 16.511719 5.9902344 C 16.343691 5.9724845 16.172587 5.9628906 16 5.9628906 C 14.857851 5.9628906 13.838597 6.4163313 13 7.0820312 C 12.161403 6.4163312 11.142149 5.9628906 10 5.9628906 L 10 5.9648438 L 10 5.9726562 C 8.9626345 5.9726562 8.0009871 6.3024547 7.203125 6.8632812 C 6.9367561 7.050515 6.6892286 7.2626484 6.4628906 7.4980469 C 6.2372577 7.7327121 6.0327425 7.9902193 5.8535156 8.265625 C 5.8535156 8.265625 5.8535156 8.2675781 5.8535156 8.2675781 C 5.6744084 8.5429982 5.5186741 8.8355083 5.3925781 9.1445312 C 5.3925781 9.1445312 5.3925781 9.1464844 5.3925781 9.1464844 C 5.2665994 9.4555309 5.1679202 9.7797132 5.1015625 10.115234 C 5.1015625 10.115234 5.1015625 10.117188 5.1015625 10.117188 C 5.0685051 10.284651 5.0423624 10.454225 5.0253906 10.626953 C 5.0253906 10.626953 5.0253906 10.628906 5.0253906 10.628906 C 5.0084793 10.801659 5 10.977166 5 11.154297 L 5 11.15625 C 5.0000901 11.372093 5.0159267 11.587306 5.0449219 11.800781 C 5.0449219 11.800781 5.0449219 11.802734 5.0449219 11.802734 C 5.0740014 12.016215 5.1158139 12.228744 5.171875 12.439453 C 5.171875 12.439453 5.171875 12.441406 5.171875 12.441406 C 5.2280171 12.652136 5.2977029 12.860807 5.3789062 13.068359 C 5.3789062 13.068359 5.3789062 13.070312 5.3789062 13.070312 C 5.4601881 13.277895 5.5557321 13.4835 5.6601562 13.6875 C 5.6601562 13.6875 5.6601562 13.689453 5.6601562 13.689453 C 5.764654 13.893482 5.8801398 14.094883 6.0058594 14.294922 C 6.0058594 14.294922 6.0058594 14.296875 6.0058594 14.296875 C 6.1316491 14.496945 6.2689724 14.694951 6.4140625 14.890625 C 6.4140625 14.890625 6.4140625 14.892578 6.4140625 14.892578 C 6.7046767 15.284395 7.0322727 15.665352 7.3886719 16.037109 C 7.3886719 16.037109 7.3886719 16.039062 7.3886719 16.039062 C 7.4574099 16.111062 7.5266938 16.182906 7.5976562 16.253906 L 16.771484 25.427734 z "
                                        color="#000"
                                        font-family="sans-serif"
                                        font-weight="400"
                                        transform="translate(-5 1031.362)" />
                                    <path
                                        style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                                        d="M 5,0.9921875 5,1 C 2.233692,1 0,3.3370406 0,6.1816406 c 0,1.732 0.96166378,3.3943125 2.3886719,4.8828124 1.4270081,1.4885 3.3420414,2.82076 5.3808593,3.880859 L 8,15.064453 8.2304688,14.945312 C 10.269012,13.885313 12.160735,12.567338 13.576172,11.085938 14.991608,9.6044375 15.948935,7.9426125 16,6.1953125 l 0,-0.011719 0,-0.00977 c 0,-2.8446 -2.233692,-5.1816406 -5,-5.1816406 -1.1421486,0 -2.1614033,0.4534406 -3,1.1191406 C 7.1614033,1.4456281 6.1421486,0.9921875 5,0.9921875 Z M 5,2 C 6.0195282,2 6.9488681,2.4060594 7.6601562,3.0683594 L 8,3.3867188 8.3398438,3.0683594 C 9.051132,2.4060594 9.9804718,2 11,2 c 2.200955,0 3.992687,1.851875 3.998047,4.171875 -0.04284,1.3941 -0.834768,2.8517562 -2.144531,4.222656 C 11.596185,11.710431 9.8678417,12.918716 8,13.916016 6.1301215,12.917516 4.379843,11.696247 3.1113281,10.373047 1.7883362,8.9930469 1,7.5355406 1,6.1816406 1,3.8567406 2.795748,2 5,2 Z"
                                        color="#000"
                                        font-family="sans-serif"
                                        font-weight="400"
                                        overflow="visible"
                                        transform="translate(0 1036.334)" />
                                </g>
                            </svg>
                            <span class="absolute inset-0 rounded-full shadow-inner"
                                aria-hidden="true"></span>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800 uppercase">{{ auth()->user()->name }}</h1>
                    </div>
                </div>
                <div
                    class="flex flex-col-reverse mt-6 space-y-4 space-y-reverse justify-stretch sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3">
                    <form method="POST"
                        action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
          this.closest('form').submit();"
                            class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">Logout</a>

                    </form>
                </div>
            </div>
            <div class="p-4 mx-auto mt-8 bg-white border rounded-md max-w-7xl">
                <div class="grid mb-3 space-y-1 text-lg">
                    <span> Student : {{ $student->first_name }} {{ $student->last_name }}</span>
                    <span> Status : {{ $latest_bmi->status }}</span>
                    <span> BMI : {{ $latest_bmi->bmi }}</span>
                </div>
                <div>
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="flex flex-col mt-8">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <div class="overflow-hidden shadow-sm ring-1 ring-black ring-opacity-5">
                                        <table class="min-w-full divide-y divide-gray-300">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8">
                                                        Day</th>
                                                    <th scope="col"
                                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8">
                                                        Time</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                        Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($meal_plans as $meal_plan)
                                                    <tr>
                                                        <td
                                                            class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6 lg:pl-8">
                                                            {{ [...$meal_plan][0]->day }}</td>
                                                        </td>
                                                        <td
                                                            class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6 lg:pl-8">
                                                            {{ [...$meal_plan][0]->meal_time }},
                                                            {{ [...$meal_plan][1]->meal_time }},
                                                            {{ [...$meal_plan][2]->meal_time }}
                                                        </td>
                                                        </td>
                                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                            @if (in_array([...$meal_plan][0]->id, $dones))
                                                                <span class="font-bold text-green-600">
                                                                    Done
                                                                </span>
                                                            @else
                                                                Not Done
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>

    @livewireScripts
</body>

</html>
