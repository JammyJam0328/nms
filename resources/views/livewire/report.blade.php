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
                <select wire:model="allmonth"
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
                <a href="{{ route('admin.report-print-all', ['month' => $allmonth, 'year' => $allyear]) }}"
                    class="flex bg-gray-700 mt-1 text-white rounded-md text-sm items-center space-x-1 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-printer">
                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                        <rect x="6" y="14" width="12" height="8"></rect>
                    </svg>
                    <span>PRINT</span>
                </a>
            </div>
        </div>
        <div class="mt-3">
            {{-- @dump($sevenMale) --}}
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 ">
                            @if ($allyear == '' && $allmonth == '')
                            @else
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="">
                                        <tr class="border-2 border-gray-300">
                                            <th width="100" scope="col"
                                                class="px-2  text-left text-xs font-bold text-gray-700 uppercase ">GRADE
                                                LEVEL</th>
                                            <th width="100" scope="col"
                                                class="px-2  text-left text-xs font-bold text-gray-700 uppercase">
                                                ENROLMENT
                                            </th>
                                            <th width="500" scope="col"
                                                class="px-2  text-left text-xs font-bold text-gray-700 uppercase">
                                                <div class="">
                                                    <div class="border-b flex-1 py-1 text-white bg-gray-700">
                                                        <h1 class="text-center">BODY MASS INDEX (BMI)</h1>
                                                    </div>
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>Severely Underweight</div>
                                                        <div>Underweight</div>
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
                                            <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade
                                                7
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="grid grid-cols-1">
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            M</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                            {{ $sevenMale }}</div>
                                                    </div>
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            F</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                            {{ $sevenFemale }} </div>
                                                    </div>



                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>{{$sevenSUMale}}</div>
                                                        <div>{{$sevenUMale}}</div>
                                                        <div>{{$sevenNMale}}</div>
                                                        <div>{{$sevenOWMale}}</div>
                                                        <div>{{$sevenOMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>{{$sevenSUFemale}}</div>
                                                        <div>{{$sevenUFemale}}</div>
                                                        <div>{{$sevenNFemale}}</div>
                                                        <div>{{$sevenOWFemale}}</div>
                                                        <div>{{$sevenOFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$sevenSSMale}}</div>
                                                        <div>{{$sevenSMale}}</div>
                                                        <div>{{$sevenNOMale}}</div>
                                                        <div>{{$sevenTMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$sevenSSFemale}}</div>
                                                        <div>{{$sevenSFemale}}</div>
                                                        <div>{{$sevenNOFemale}}</div>
                                                        <div>{{$sevenTFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="bg-gray-100 border-b">
                                            <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade
                                                8
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="grid grid-cols-1">
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            M</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">{{$eightMale}}</div>
                                                    </div>
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            F</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">{{$eightFemale}}</div>
                                                    </div>



                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">



                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">

                                                        <div>{{$eightSUMale}}</div>
                                                        <div>{{$eightUMale}}</div>
                                                        <div>{{$eightNMale}}</div>
                                                        <div>{{$eightOWMale}}</div>
                                                        <div>{{$eightOMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>{{$eightSUFemale}}</div>
                                                        <div>{{$eightUFemale}}</div>
                                                        <div>{{$eightNFemale}}</div>
                                                        <div>{{$eightOWFemale}}</div>
                                                        <div>{{$eightOFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$eightSSMale}}</div>
                                                        <div>{{$eightSMale}}</div>
                                                        <div>{{$eightNOMale}}</div>
                                                        <div>{{$eightTMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$eightSSFemale}}</div>
                                                        <div>{{$eightSFemale}}</div>
                                                        <div>{{$eightNOFemale}}</div>
                                                        <div>{{$eightTFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="bg-gray-100 border-b">
                                            <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade
                                                9
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="grid grid-cols-1">
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            M</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">{{$nineMale}}
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            F</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                            {{$nineFemale}}</div>
                                                    </div>



                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>{{$nineSUMale}}</div>
                                                        <div>{{$nineUMale}}</div>
                                                        <div>{{$nineNMale}}</div>
                                                        <div>{{$nineOWMale}}</div>
                                                        <div>{{$nineOMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>{{$nineSUFemale}}</div>
                                                        <div>{{$nineUFemale}}</div>
                                                        <div>{{$nineNFemale}}</div>
                                                        <div>{{$nineOWFemale}}</div>
                                                        <div>{{$nineOFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$nineSSMale}}</div>
                                                        <div>{{$nineSMale}}</div>
                                                        <div>{{$nineNOMale}}</div>
                                                        <div>{{$nineTMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$nineSSFemale}}</div>
                                                        <div>{{$nineSFemale}}</div>
                                                        <div>{{$nineNOFemale}}</div>
                                                        <div>{{$nineTFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="bg-gray-100 border-b">
                                            <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade
                                                10
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="grid grid-cols-1">
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            M</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                            {{$tenMale}}</div>
                                                    </div>
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            F</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                            {{$tenFemale}}</div>
                                                    </div>



                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>{{$tenSUMale}}</div>
                                                        <div>{{$tenUMale}}</div>
                                                        <div>{{$tenNMale}}</div>
                                                        <div>{{$tenOWMale}}</div>
                                                        <div>{{$tenOMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>{{$tenSUFemale}}</div>
                                                        <div>{{$tenUFemale}}</div>
                                                        <div>{{$tenNFemale}}</div>
                                                        <div>{{$tenOWFemale}}</div>
                                                        <div>{{$tenOFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$tenSSMale}}</div>
                                                        <div>{{$tenSMale}}</div>
                                                        <div>{{$tenNOMale}}</div>
                                                        <div>{{$tenTMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$tenSSFemale}}</div>
                                                        <div>{{$tenSFemale}}</div>
                                                        <div>{{$tenNOFemale}}</div>
                                                        <div>{{$tenTFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="bg-gray-100 border-b">
                                            <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade
                                                11
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="grid grid-cols-1">
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            M</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                            {{$elevenMale}}</div>
                                                    </div>
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            F</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                            {{$elevenFemale}}</div>
                                                    </div>



                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>{{$elevenSUMale}}</div>
                                                        <div>{{$elevenUMale}}</div>
                                                        <div>{{$elevenNMale}}</div>
                                                        <div>{{$elevenOWMale}}</div>
                                                        <div>{{$elevenOMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>{{$elevenSUFemale}}</div>
                                                        <div>{{$elevenUFemale}}</div>
                                                        <div>{{$elevenNFemale}}</div>
                                                        <div>{{$elevenOWFemale}}</div>
                                                        <div>{{$elevenOFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$elevenSSMale}}</div>
                                                        <div>{{$elevenSMale}}</div>
                                                        <div>{{$elevenNOMale}}</div>
                                                        <div>{{$elevenTMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$elevenSSFemale}}</div>
                                                        <div>{{$elevenSFemale}}</div>
                                                        <div>{{$elevenNOFemale}}</div>
                                                        <div>{{$elevenTFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="bg-gray-100 border-b">
                                            <td class="px-2  whitespace-nowrap text-sm font-medium text-gray-700">Grade
                                                12
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="grid grid-cols-1">
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            M</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                            {{$twelveMale}}</div>
                                                    </div>
                                                    <div class="flex">
                                                        <div
                                                            class=" border-r-2 border-l-2 border-gray-300 flex font-bold text-gray-700 justify-center w-6/12 px-1">
                                                            F</div>
                                                        <div
                                                            class=" w-6/12 border-r-2 border-gray-300 flex justify-center font-bold text-gray-700 px-1">
                                                            {{$twelveFemale}}</div>
                                                    </div>



                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>{{$twelveSUMale}}</div>
                                                        <div>{{$twelveUMale}}</div>
                                                        <div>{{$twelveNMale}}</div>
                                                        <div>{{$twelveOWMale}}</div>
                                                        <div>{{$twelveOMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-5 text-xs font-semibold text-center">
                                                        <div>{{$twelveSUFemale}}</div>
                                                        <div>{{$twelveUFemale}}</div>
                                                        <div>{{$twelveNFemale}}</div>
                                                        <div>{{$twelveOWFemale}}</div>
                                                        <div>{{$twelveOFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-2  whitespace-nowrap text-sm text-gray-700">
                                                <div class="flex flex-col">
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$twelveSSMale}}</div>
                                                        <div>{{$twelveSMale}}</div>
                                                        <div>{{$twelveNOMale}}</div>
                                                        <div>{{$twelveTMale}}</div>
                                                    </div>
                                                    <div class="grid grid-cols-4 text-xs font-semibold text-center">
                                                        <div>{{$twelveSSFemale}}</div>
                                                        <div>{{$twelveSFemale}}</div>
                                                        <div>{{$twelveNOFemale}}</div>
                                                        <div>{{$twelveTFemale}}</div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>


                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            @endif
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
                <select wire:model="selected_section"
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
                <button wire:click="generate"
                    class="bg-green-700 hover:bg-green-800 flex items-center justify-center mt-1 px-2 rounded-md shadow-sm text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-rotate-cw">
                        <polyline points="23 4 23 10 17 10"></polyline>
                        <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>
                    </svg>



                </button>
                <a href="{{ route('admin.report-print', ['month' => $month, 'year' => $year, 'section' => $selected_section]) }}"
                    class="flex bg-gray-700 mt-1 text-white rounded-md text-sm items-center space-x-1 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-printer">
                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                        <rect x="6" y="14" width="12" height="8"></rect>
                    </svg>
                    <span>PRINT</span>
                </a>
            </div>
        </div>
        <div class="mt-3">
            {{-- @dump($selected_section) --}}
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
                                            $height2 = round($report->height * $report->height, 2);
                                            $year = \Carbon\Carbon::parse($report->sectionstudent->student->date_of_birth)
                                                ->diff(\Carbon\Carbon::now())
                                                ->format('%y');
                                            //    dd($year);
                                            $month = \Carbon\Carbon::parse($report->sectionstudent->student->date_of_birth)
                                                ->diff(\Carbon\Carbon::now())
                                                ->format('%m');
                                        @endphp
                                        <tr class="bg-white">
                                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $report->sectionstudent->student->first_name }}
                                                {{ $report->sectionstudent->student->last_name }}</td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                                {{ $report->sectionstudent->student->date_of_birth }}</td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                                {{ $report->weight }}</td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                                {{ $report->height }}</td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                                {{ $report->sectionstudent->student->sex }}</td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                                {{ $height2 }}</td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                                {{ $year }},{{ $month }}</td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                                {{ $report->bmi }}</td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                                {{ $report->status }}</td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                                {{ $report->height_for_age }}</td>

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
