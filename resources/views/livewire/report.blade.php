<div>
    {{-- <livewire:admin.meal-plan /> --}}
    <div class="mt-2 bg-white p-2 shadow-md rounded-md">
        <div class="flex items-center justify-between">
            <h1 class="font-bold text-gray-700">NUTRITIONAL STATUS REPORTS</h1>
            <div class="flex space-x-2">
                @php
                for ($i = 2020; $i <= 2040; $i++) {
                    $school_years[] = $i . '-' . ($i + 1);
                }
            @endphp
            <select wire:model="allyear"
                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option>--Select Year--</option>
                @foreach ($school_years as $key => $sy)
                    <option value="{{ $sy }}">{{ $sy }}</option>
                @endforeach
            </select>
                <select 
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option>--Select Month--</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>




                </select>
            </div>
        </div>
        <div class="mt-3">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 ">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="">
                                    <tr class="border-2 border-gray-300">
                                        <th width="100" scope="col"
                                            class="px-2  text-left text-xs font-bold text-gray-700 uppercase ">GRADE
                                            LEVEL</th>
                                        <th width="100" scope="col"
                                            class="px-2  text-left text-xs font-bold text-gray-700 uppercase">ENROLMENT
                                        </th>
                                        <th width="500" scope="col"
                                            class="px-2  text-left text-xs font-bold text-gray-700 uppercase">
                                            <div class="">
                                                <div class="border-b flex-1 py-1 text-white bg-gray-700">
                                                    <h1 class="text-center">BODY MASS INDEX (BMI)</h1>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </th>
                                        <th width="500"
                                            class="px-2  text-left text-xs font-bold text-gray-700 uppercase">
                                            <div class="mb-4">
                                                <div class="border-b flex-1 py-1 text-white bg-gray-700">
                                                    <h1 class="text-center">HEIGHT FOR AGE (HFA)</h1>
                                                </div>
                                                <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                    <div>Severely Stunted</div>
                                                    <div>Stunted</div>
                                                    <div>Normal</div>
                                                    <div>Tall</div>
                                                </div>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Odd row -->


                                    <!-- Even row -->
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade 7
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="grid grid-cols-1">
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        M</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        100</div>
                                                </div>
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        F</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        100</div>
                                                </div>



                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade 8
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="grid grid-cols-1">
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        M</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        {{count($eigth_grade['Male'])}}</div>
                                                </div>
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        F</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        {{count($eigth_grade['Female'])}}</div>
                                                </div>



                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                              @php
                                                $eigth_grade_ids= [];
                                                foreach ($eigth_grade['Female'] as $key => $eigth_grade_student) {
                                                    $eigth_grade_ids = $eigth_grade_student->id;
                                                }



                                              @endphp
                                              @dump($eigth_grade_ids)
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                   
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade 9
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="grid grid-cols-1">
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        M</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        100</div>
                                                </div>
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        F</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        100</div>
                                                </div>



                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade 10
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="grid grid-cols-1">
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        M</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        100</div>
                                                </div>
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        F</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        100</div>
                                                </div>



                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade 11
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="grid grid-cols-1">
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        M</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        100</div>
                                                </div>
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        F</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        100</div>
                                                </div>



                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="bg-gray-100 border-b">
                                        <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade 12
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="grid grid-cols-1">
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        M</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        100</div>
                                                </div>
                                                <div class="flex">
                                                    <div
                                                        class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                        F</div>
                                                    <div
                                                        class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                        100</div>
                                                </div>



                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                            <div class="flex flex-col">
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                                <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                    <div>Severely Wasted</div>
                                                    <div>Wasted</div>
                                                    <div>Normal</div>
                                                    <div>Overweight</div>
                                                    <div>Obese</div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    

                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="bg-gray-100 mt-10">
           {{-- @dump($eigth_grade) --}}
        </div>
    </div>
    <div class="mt-6 bg-white p-2 shadow-md rounded-md">
        <div class="flex items-center justify-between">
            <h1 class="font-bold text-gray-700">NUTRITIONAL STATUS REPORTS</h1>
            <div class="flex space-x-2">
                @php
                    for ($i = 2020; $i <= 2040; $i++) {
                        $school_years[] = $i . '-' . ($i + 1);
                    }
                @endphp
                <select wire:model="year"
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option>--Select Year--</option>
                    @foreach ($school_years as $key => $sy)
                        <option value="{{ $sy }}">{{ $sy }}</option>
                    @endforeach
                </select>
                {{-- @dump($year) --}}
                <select wire:model="section"
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option>--Select Section--</option>
                    @foreach ($sections as $section)
                        <option value="{{ $section->name }}">{{ $section->name }}</option>
                    @endforeach
                </select>
                <select wire:model="month"
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option>--Select Month--</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <button wire:click="generate" class="bg-green-700 hover:bg-green-800 flex items-center justify-center mt-1 px-2 rounded-md shadow-sm text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-rotate-cw">
                        <polyline points="23 4 23 10 17 10"></polyline>
                        <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="mt-3">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 ">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                                            Name</th>
                                        <th width="100" scope="col"
                                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                                            <div class="flex flex-col"><span>Birthday </span>
                                                <span class="text-xs">(mm/dd/yyyy)</span>
                                            </div>
                                        </th>
                                        <th scope="50"
                                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                                            <div class="flex flex-col">
                                                <span>Weight</span> (kg)
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                                            Height (m)</th>
                                        <th scope="col"
                                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                                            sex</th>
                                        <th scope="col"
                                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                                            height(2)</th>
                                        <th scope="col"
                                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                                            <div class="font-bold">Age</div>
                                            <div class="text-xs">(y,m)</div>
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                                            BMI</th>
                                        <th scope="col"
                                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                                            NUTRITIONAL status</th>
                                        <th scope="col"
                                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                                            height for age</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Odd row -->
                                   @forelse ($reports as $report)
                                   @php
                                       $height2 = round($report->height * $report->height,2);
                                       $year = \Carbon\Carbon::parse($report->sectionstudent->student->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y');
                                    //    dd($year);
                                       $month = \Carbon\Carbon::parse($report->sectionstudent->student->date_of_birth)->diff(\Carbon\Carbon::now())->format('%m');
                                   @endphp
                                   <tr class="bg-white">
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{$report->sectionstudent->student->first_name}} {{$report->sectionstudent->student->last_name}}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{$report->sectionstudent->student->date_of_birth}}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{$report->weight}}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{$report->height}}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{$report->sectionstudent->student->sex}}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{$height2}}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{$year}},{{$month}}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{$report->bmi}}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{$report->status}}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">{{$report->height_for_age}}</td>

                                </tr>
                                   @empty
                                       
                                   @endforelse



                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
