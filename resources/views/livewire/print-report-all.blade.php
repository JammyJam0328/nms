<div>
    <div class="flex mb-5 justify-between px-4">
        <h1> <span class="font-bold uppercase">Month of {{DateTime::createFromFormat('!m', $allmonth)->format('F')}}</span></h1>
        <h1>{{$allyear}} </h1>
    </div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
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
</div>
