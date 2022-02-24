@extends('layouts.admin')
@section('header')
    Dashboard
@endsection
@section('content')
    <div>
        <ul role="list"
            class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <li class="col-span-1 bg-white border-t-4 divide-y divide-gray-200 shadow border-emerald-500">
                <div class="flex items-center justify-between w-full p-6 space-x-6">
                    <div class="flex-1 truncate">
                        <div class="flex items-center space-x-3">
                            <h3 class="text-sm font-medium text-gray-900 truncate">Total Accounts</h3>
                        </div>
                        <p class="mt-1 text-sm text-gray-500 truncate">100</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 w-10 h-10 "
                        viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                    </svg>

                </div>

            </li>

        </ul>

    </div>
@endsection
