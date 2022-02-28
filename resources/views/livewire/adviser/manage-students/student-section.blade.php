<div>

    <div class="flex space-x-2">
        <div class=" w-4/12">
            <div class="border flex bg-white items-center p-1 px-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-search text-gray-700">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input placeholder="Search ..." wire:model.debounce="search" type="text"
                    class="focus:outline-none flex-1  border-0 focus:ring-0">
            </div>
            <div class=" border">
                <div class="flow-root mt-6">
                    @forelse ($students as $student)
                        <ul role="list" class="-my-6 divide-y divide-gray-200">
                            <li class="py-4 bg-white px-2">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-semibold text-gray-700 uppercase truncate">
                                            {{ $student->first_name }} {{ $student->last_name }}</p>
                                        <p class="text-sm text-gray-500 truncate">{{ $student->sex }}</p>
                                    </div>
                                    <div>
                                        <button wire:click="add({{ $student->id }})"
                                            class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                            Add </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    @empty
                        <div class="bg-white -my-6 p-2 text-sm text-gray-600 italic flex items-center justify-center">
                            Search students ...
                        </div>
                    @endforelse
                </div>

            </div>
        </div>
        <div class="border-l w-8/12">
            <div x-data="{alert:false}" x-on:notify.window="alert=true;
        document.querySelector('#type').innerHTML = event.detail.type;
        document.querySelector('#message').innerHTML=event.detail.message;
        setTimeout(function(){
            alert=false;
        },2000);">
                <div x-cloak x-show="alert">
                    <div :class="type=='error'?'bg-green-500':'bg-red-500'"
                        class="flex justify-between p-3 mb-2 text-white shadow-inner">
                        <p class="self-center">
                            <strong class="uppercase" id="type"></strong> <span id="message"></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative   border border-green-400 bg-white px-4 py-4 shadow-sm flex items-center space-x-3 ">
                <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-400 fill-green-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <a href="#" class="focus:outline-none">
                        <span class=" inset-0" aria-hidden="true"></span>
                        <p class="text-sm font-semibold text-gray-700 uppercase">{{ $section->grade_level }} -
                            {{ $section->name }}</p>
                        <p class="text-sm text-gray-500 truncate">{{ $section->school_year }}</p>
                    </a>
                </div>

            </div>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-2 border-green-500 ">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-yellow-500">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                        Date of Birth</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                        Age</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                        Sex</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                        Address</th>

                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($sectionstudents as $student)
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $student->student->first_name }}
                                            {{ $student->student->middle_name[0] }}
                                            {{ $student->student->last_name }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $student->student->date_of_birth }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $student->student->age }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $student->student->sex }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $student->student->address }}
                                        </td>


                                        <td x-data="{bmi:false}"
                                            class="flex px-6 py-4 space-x-2 text-sm font-medium text-right whitespace-nowrap">
                                            <button type="button" @click="bmi=true"
                                                wire:click.prevent="openBMI('{{ $student->student->id }}')"
                                                class="text-white bg-green-700  rounded-md  hover:bg-green-900">
                                                <span class="px-1">BMI</span>
                                            </button>
                                            <button type="button"
                                                wire:click.prevent="edit('{{ $student->student->id }}')"
                                                class="text-yellow-500 hover:text-indigo-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                x-on:click.prevent="if(confirm('Are you sure?')){$wire.deleteStudent('{{ $student->id }}')}"
                                                class="text-red-600 hover:text-indigo-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>

                                            {{-- bmi --}}
                                            <div x-show="bmi" x-cloak class="fixed z-10 inset-0 overflow-y-auto"
                                                aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                <div
                                                    class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                    <!--
        Background overlay, show/hide based on modal state.
  
        Entering: "ease-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100"
          To: "opacity-0"
      -->
                                                    <div x-show="bmi" x-cloak x-transition:enter="ease-out duration-300"
                                                        x-transition:enter-start="opacity-0"
                                                        x-transition:enter-end="opacity-100"
                                                        x-transition:leave="ease-in duration-200"
                                                        x-transition:leave-start="opacity-100"
                                                        x-transition:leave-end="opacity-0"
                                                        class="fixed inset-0 bg-gray-800 bg-opacity-75 transition-opacity"
                                                        aria-hidden="true"></div>

                                                    <!-- This element is to trick the browser into centering the modal contents. -->
                                                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                        aria-hidden="true">&#8203;</span>

                                                    <!--
        Modal panel, show/hide based on modal state.
  
        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
                                                    <div x-show="bmi" x-cloak x-transition:enter="ease-out duration-300"
                                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                        x-transition:leave="ease-in duration-200"
                                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full sm:p-6">
                                                        <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                                                            <button type="button" @click="bmi=false"
                                                                class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                <span class="sr-only">Close</span>
                                                                <!-- Heroicon name: outline/x -->
                                                                <svg class="h-6 w-6"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class=" header">
                                                            <h1
                                                                class="text-xl border-b-2 border-gray-300 font-bold text-gray-700">
                                                                Body Mass Index (BMI)</h1>
                                                        </div>
                                                        <div class="mt-2">
                                                            <div class="">

                                                                <div
                                                                    class="relative  border-2 border-green-500 bg-white px-4 py-2 flex-1 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                    <div class="flex-shrink-0 text-green-800">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-8 w-8" viewBox="0 0 20 20"
                                                                            fill="currentColor">
                                                                            <path fill-rule="evenodd"
                                                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="flex-1 min-w-0">
                                                                        <a href="#" class="focus:outline-none">
                                                                            <span class="absolute inset-0"
                                                                                aria-hidden="true"></span>
                                                                            <p
                                                                                class="uppercase font-bold text-gray-700">
                                                                                {{ $name }}</p>
                                                                            <p class="text-sm text-gray-500 truncate">
                                                                                {{ $sex }}</p>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <!-- More people... -->
                                                            </div>
                                                            <div class=" mt-4 flex">
                                                                <div class=" w-4/12 border-r px-2">
                                                                    <div>
                                                                        <label for="company-website"
                                                                            class="block text-sm font-medium text-gray-700">Height</label>
                                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                                            <span
                                                                                class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">m</span>
                                                                            <input type="number" name="company-website" wire:model="height"
                                                                                id="company-website"
                                                                                class="flex-1 min-w-0 block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300"
                                                                                >
                                                                        </div>
                                                                        @error('height') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                                                    </div>
                                                                    <div>
                                                                        <label for="company-website"
                                                                            class="block text-sm font-medium text-gray-700">Weight</label>
                                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                                            <span
                                                                                class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">kg</span>
                                                                            <input type="number" name="company-website" wire:model="weight"
                                                                                id="company-website"
                                                                                class="flex-1 min-w-0 block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300"
                                                                                >
                                                                        </div>
                                                                        @error('weight') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
                                                                    </div>
                                                                    <button wire:click="showBMI" class="bg-green-700 px-2 mt-2 text-white rounded-md hover:bg-green-900">Add BMI</button>
                                                                </div>
                                                                <div class=" w-8/12 h-96 relative px-2">
                                                                    <div class="absolute bottom-0">
                                                                        <button @click="bmi=false" class="bg-red-600 px-2 text-white rounded-md">Close</button>
                                                                    </div>
                                                                <div class="header flex items-center border-b justify-between">
                                                                  <h1 class="text-gray-700 font-bold text-lg">
                                                                    BMI RESULT
                                                                  </h1>
                                                                </div>
                                                                {{-- <div class=" flex text-lg">
                                                                    <span class="text-red-400">*</span>
                                                                    <span class="text-gray-700 uppercase underline">{{$bmi_result}}</span>
                                                                    <span class="text-red-400">*</span>
                                                                </div> --}}
                                                                <!-- This example requires Tailwind CSS v2.0+ -->
                                                                    <livewire:student-bmi :sectionstudentid="$section_id"/>
  
                                                            </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="py-2">
                        {{ $sectionstudents->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
