<div>
    <div
        class="grid max-w-3xl grid-cols-1 gap-6 mx-auto mt-8 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
        <div class="space-y-6 lg:col-start-1 lg:col-span-2">
            <!-- Description list-->
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
                                            class="flex justify-between px-2 py-2 font-bold text-white uppercase bg-gray-500">
                                            <span>{{ $item->meal_time }}*</span>


                                        </div>
                                        <div>
                                            <div class="py-1 border-b border-l border-r">
                                                @foreach ($item->foods as $key => $food)
                                                    <div wire:key="{{ $key }}-food"
                                                        class="flex justify-between px-2 bg-white ">
                                                        <span> {{ $food->name }}</span>

                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                                <div>
                                    @if (in_array([...$meal][0]->id, $dones))
                                        <div class="p-1 text-center text-white bg-gray-600 rounded-md">
                                            Done
                                        </div>
                                    @else
                                        <div class="my-2">
                                            <button type="button"
                                                wire:click.prevent="done('{{ [...$meal][0]->id }}')"
                                                class="p-1 text-white bg-green-600 rounded-md focus:bg-green-500">
                                                Mark as done
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
        <section aria-labelledby="timeline-title"
            class="lg:col-start-3 lg:col-span-1">
            <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:px-6">
                <h2 id="timeline-title"
                    class="text-lg font-extrabold text-gray-900 border-b">MY BMIs</h2>

                <!-- Activity Feed -->
                <div>
                    <ul role="list"
                        class="py-2 space-y-3 ">
                        @forelse ($bmis as $key=>$bmi)
                            @php
                                $h = $bmi->height * $bmi->height;
                                $w = $bmi->weight;
                                $bmi_result = $w / $h;
                            @endphp
                            <li wire:key="{{ $bmi->id }}{{ $key }}"
                                wire:click.prevent="showMealPlan('{{ $bmi->status }}','{{ $bmi->id }}')"
                                class="px-2 py-2 border rounded-lg cursor-pointer hover:bg-gray-100">
                                <div class="flex space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="text-gray-700 fill-current feathe feather-monitor">
                                        <rect x="2"
                                            y="3"
                                            width="20"
                                            height="14"
                                            rx="2"
                                            ry="2"></rect>
                                        <line x1="8"
                                            y1="21"
                                            x2="16"
                                            y2="21"></line>
                                        <line x1="12"
                                            y1="17"
                                            x2="12"
                                            y2="21"></line>
                                    </svg>
                                    <div class="flex-1 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="font-bold text-green-900 ">{{ round($bmi_result, 2) }}</h3>
                                            <p class="text-sm text-gray-500">{{ $bmi->created_at->format('M') }}</p>
                                        </div>
                                        <p class="text-lg font-bold text-gray-800 uppercase">{{ $bmi->status }}
                                            @if ($key == 0)
                                                (<span class="text-xs text-gray-500">latest</span>)
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @empty
                        @endforelse

                        <!-- More items... -->
                    </ul>
                </div>
               
            </div>
        </section>
    </div>
</div>
