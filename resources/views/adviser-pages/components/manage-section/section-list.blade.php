<div>
    <div class="my-2">
        <button x-on:click="action='create'"
            type="button"
            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Create New
        </button>
    </div>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
        @foreach ($sections as $key => $section)
            <div  wire:key="{{ $key }}" 
                class="relative  border border-green-400 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 ">
                <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-10 w-10 text-yellow-400 fill-green-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <a href="#"
                        class="focus:outline-none">
                        <span class=" inset-0"
                            aria-hidden="true"></span>
                        <p class="text-sm font-medium text-gray-900">{{ $section->grade_level }} -
                            {{ $section->name }}</p>
                        <p class="text-sm text-gray-500 truncate">{{ $section->school_year }}</p>
                    </a>
                </div>
                <div class="flex space-x-1 ">
                    <button type="button"
                    x-on:click="window.location.href='{{route('adviser.my-section',['id'=>$section->id])}}'"
                        class="p-2 border text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                          </svg>
                    </button>
                    <button type="button"
                        wire:click="editSection('{{ $section->id }}')"
                        class="p-2 border text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                    </button>
                    <button
                        x-on:click="if(confirm('Are you sure you want to delete this section ? ')){$wire.deleteSection('{{ $section->id }}')}"
                        type="button"
                        class="p-2 border text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>
