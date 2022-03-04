<div>
    <div>
        <div class="py-2">
            <div>
                <select id="filter"
                    wire:model="filter"
                    name="filter"
                    class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="1">Reducing Diet</option>
                    <option value="2">Undernourished or Underweight</option>
                </select>
            </div>
        </div>
        <div
            class="grid max-w-3xl grid-cols-1 gap-6 mx-auto mt-8 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
            <div class="space-y-6 lg:col-start-1 lg:col-span-2">
                <section aria-labelledby="applicant-information-title">
                    @foreach ($meals as $key => $meal)
                        <div wire:key="meal-list-{{ $key }}{{ [...$meal][0]->id }}">
                            <div class="relative px-3 py-2"
                                x-data="{isopen:false}"
                                x-id="['meals']"
                                @click.away="isopen=false">
                                <div class="flex items-center justify-between p-2 bg-gray-700 rounded-t-lg">
                                    <h1 class="flex items-end space-x-1 font-bold text-white uppercase">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-calendar">
                                            <rect x="3"
                                                y="4"
                                                width="18"
                                                height="18"
                                                rx="2"
                                                ry="2"></rect>
                                            <line x1="16"
                                                y1="2"
                                                x2="16"
                                                y2="6"></line>
                                            <line x1="8"
                                                y1="2"
                                                x2="8"
                                                y2="6"></line>
                                            <line x1="3"
                                                y1="10"
                                                x2="21"
                                                y2="10"></line>
                                        </svg>
                                        <span wire:key="title-{{ [...$meal][0]->id }}{{ [...$meal][0]->day }}"
                                            class="uppercase">{{ [...$meal][0]->day }}</span>
                                    </h1>
                                    <button @click="isopen=!isopen">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            :class="isopen?'rotate-180 duration-500':'duration-500 rotate-0'"
                                            class="text-white feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </button>
                                </div>
                                <div x-cloak
                                    x-show="isopen"
                                    x-collapse.transition.duration.500ms
                                    class="p-2 bg-white rounded-b-lg shadow-md">
                                    @foreach ($meal as $key => $item)
                                        <div x-data="{isOpen:false}"
                                            x-on:click.away="isOpen=false"
                                            wire:key="day-{{ $key }}">
                                            <div
                                                class="flex justify-between px-2 font-bold text-white uppercase bg-gray-500">
                                                <span>{{ $item->meal_time }}*</span>
                                                <button x-on:click="isOpen=!isOpen"
                                                    class="font-bold text-white">+</button>
                                            </div>
                                            <div>
                                                <div class="py-1 border-b border-l border-r">
                                                    @foreach ($item->foods as $key => $food)
                                                        <div wire:key="{{ $key }}-food"
                                                            class="flex justify-between px-2 bg-white">
                                                            <span> {{ $food->name }}</span> <button
                                                                wire:click.prevent="removeFood('{{ $food->id }}')"
                                                                class="text-red-600">remove</button>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div x-cloak
                                                    x-show="isOpen"
                                                    x-collapse
                                                    class="flex w-full my-2 space-x-1">
                                                    <input type="text"
                                                        wire:model.defer="new_food"
                                                        name="new_food{{ $item->id }}"
                                                        id="new_food{{ $item->id }}"
                                                        class="w-full p-2 border border-gray-300">
                                                    <button wire:click.prevent="addFood({{ $item->id }})"
                                                        type="button"
                                                        class="px-2 py-1 text-white bg-green-600">
                                                        Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
                <div class="flex w-full my-3 space-x-2">
                    <input type="text"
                        wire:model.defer="new_day"
                        class="w-full p-2 border"
                        name="day"
                        id="day">
                    <button wire:click.prevent="addDay"
                        class="px-2 py-1 text-white bg-blue-600">
                        Add
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
