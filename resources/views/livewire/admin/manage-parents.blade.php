<div x-data="{action:''}"
    x-on:alert.window="action = event.detail.nextAction">
    <div class="space-y-2">
        <div>
            <label for="student"
                class="block text-sm font-medium text-gray-700">Search Student</label>
            <div class="relative mt-1">
                <input id="student"
                    wire:model.debounce="searchTerm"
                    type="text"
                    class="w-full py-2 pl-3 pr-12 bg-white border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
                    role="student"
                    aria-controls="options"
                    aria-expanded="false">
                <button type="button"
                    class="absolute inset-y-0 right-0 flex items-center px-2 rounded-r-md focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>

                @if ($searchTerm != '')
                    <ul class="absolute z-10 w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                        id="options"
                        role="listbox">

                        @forelse ($students as $key=>$student)
                            <li wire:click="setStudent({{ $student->id }})"
                                wire:key="{{ $key }}"
                                class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9"
                                id="option-0"
                                role="option"
                                tabindex="-1">
                                <span class="block truncate">{{ $student->last_name }}, {{ $student->first_name }}
                                    {{ $student->middle_name }}</span>
                            </li>
                        @empty
                            <li class="py-2 pl-3 text-center text-gray-900 cursor-default select-none pr-9"
                                id="option-0"
                                role="option"
                                tabindex="-1">
                                <span class="block truncate">No student found</span>
                            </li>
                        @endforelse

                    </ul>
                @endif
            </div>
        </div>
        <div>
            @if ($set_id != '')
                <div
                    class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 "
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
                    </div>
                    <div class="flex-1 min-w-0">
                        <a href="#"
                            class="focus:outline-none">
                            <span class="absolute inset-0"
                                aria-hidden="true"></span>
                            <p class="text-sm font-medium text-gray-900">{{ $this->student->first_name }}
                                {{ $this->student->middle_name }} {{ $this->student->last_name }}</p>
                        </a>
                    </div>
                    <div class="absolute self-center right-3">
                        <button wire:click="$set('set_id','')">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 text-gray-300"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endif
        </div>
        <div>
            @if ($set_id != '')
                <div>
                    <div x-cloak
                        x-show="action==''">
                        @include('admin-pages.components.parents.list')
                    </div>
                    <div x-cloak
                        x-show="action=='add'">
                        @include('admin-pages.components.parents.create')
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
