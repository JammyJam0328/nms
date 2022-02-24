<div>
    <form>
        @csrf
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                </div>
                <div class="grid grid-cols-1 mt-2 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="first-name"
                            class="block text-sm font-medium text-gray-700"> First name </label>
                        <div class="mt-1">
                            <input type="text"
                                wire:model.defer="first_name"
                                name="first-name"
                                id="first-name"
                                autocomplete="given-name"
                                class="block w-full border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="middle-name"
                            class="block text-sm font-medium text-gray-700"> Middle name </label>
                        <div class="mt-1">
                            <input type="text"
                                wire:model.defer="middle_name"
                                name="middle-name"
                                id="middle-name"
                                autocomplete="given-name"
                                class="block w-full border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="last-name"
                            class="block text-sm font-medium text-gray-700"> Last name </label>
                        <div class="mt-1">
                            <input type="text"
                                wire:model.defer="last_name"
                                name="last-name"
                                id="last-name"
                                autocomplete="family-name"
                                class="block w-full border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="sex"
                            class="block text-sm font-medium text-gray-700"> Sex </label>
                        <div class="mt-1">
                            <select id="sex"
                                wire:model.defer="sex"
                                name="sex"
                                autocomplete="sex-name"
                                class="block w-full border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                                <option value=""></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="dob"
                            class="block text-sm font-medium text-gray-700"> Date of Birth </label>
                        <div class="mt-1">
                            <input id="dob"
                                wire:model="date_of_birth"
                                name="dob"
                                type="date"
                                autocomplete="dob"
                                class="block w-full border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="age"
                            class="block text-sm font-medium text-gray-700"> Age </label>
                        <div class="mt-1">
                            <input id="age"
                                wire:model="age"
                                name="age"
                                type="number"
                                autocomplete="age"
                                class="block w-full border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="Address"
                            class="block text-sm font-medium text-gray-700"> Address </label>
                        <div class="mt-1">
                            <input id="Address"
                                wire:model="address"
                                name="Address"
                                type="text"
                                autocomplete="Address"
                                class="block w-full border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                        </div>
                    </div>



                    <div class="sm:col-span-2">
                        <label for="contact_number"
                            class="block text-sm font-medium text-gray-700"> Contact Number </label>
                        <div class="mt-1">
                            <input type="number"
                                wire:model.defer="contact_number"
                                name="contact_number"
                                id="contact_number"
                                autocomplete="contact_number"
                                class="block w-full border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button x-on:click="action='none'"
                    type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                <button type="button"
                    wire:click.prevent="createStudent"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
        </div>
    </form>

</div>
