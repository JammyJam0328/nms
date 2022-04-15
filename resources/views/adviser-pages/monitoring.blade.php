@extends('layouts.adviser')
@section('header')
    Monitor Students
@endsection
@section('content')
    <div>
        <div>
            <div class="w-full p-4 bg-white border border-gray-300 rounded-md">
                <div class="grid space-y-2">
                    <span>Student : <span class="font-bold text-gray-700">{{ $student->first_name }}
                            {{ $student->middle_name }}
                            {{ $student->last_name }}</span></span>
                    <span>BMI : <span class="font-bold text-gray-700">{{ $latest_bmi->bmi }}</span></span>
                    <span>Status : <span class="font-bold text-gray-700">{{ $latest_bmi->status }}</span></span>

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
        </div>
    </div>
@endsection
