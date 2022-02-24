<div>
    <form>
        @csrf
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Update Section</h3>
                </div>
                <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="section-name"
                            class="block text-sm font-medium text-gray-700"> Section Name</label>
                        <div class="mt-1">
                            <input type="text"
                                wire:model.defer="new_section_name"
                                name="section-name"
                                id="section-name"
                                autocomplete="given-name"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                        @error('new_section_name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-4">
                        <label for="gradelevel"
                            class="block text-sm font-medium text-gray-700">Grade Level</label>
                        <div class="mt-1">
                            <select id="gradelevel"
                                wire:model.defer="new_grade_level"
                                name="gradelevel"
                                autocomplete="gradelevel-name"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                <option value=""></option>
                                @foreach ($grade_levels as $grade)
                                    <option value="{{ $grade }}">{{ $grade }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('new_grade_level')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="sy"
                            class="block text-sm font-medium text-gray-700">School Year</label>
                        <div class="mt-1">
                            <select id="sy"
                                wire:model.defer="new_school_year"
                                name="sy"
                                autocomplete="sy-name"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                <option value=""></option>
                                @foreach ($school_years as $sy)
                                    <option value="{{ $sy }}">{{ $sy }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('new_school_year')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>


        </div>

        <div class="pt-3 mt-3 border-t">
            <div class="flex justify-start">
                <button x-on:click="action='none'"
                    type="button"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Cancel</button>
                <button wire:click.prevent="updateSection"
                    type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Update
                </button>
            </div>
        </div>
    </form>
</div>
