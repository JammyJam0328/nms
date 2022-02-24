<div>
    <form class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Update Information</h3>
                </div>
                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="update_first-name"
                            class="block text-sm font-medium text-gray-700"> First name </label>
                        <div class="mt-1">
                            <input type="text"
                                wire:model.defer="update_first_name"
                                name="update_first-name"
                                id="update_first-name"
                                autocomplete="update_given-name"
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('update_first_name')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="update_middle-name"
                            class="block text-sm font-medium text-gray-700"> Middle name </label>
                        <div class="mt-1">
                            <input type="text"
                                wire:model.defer="update_middle_name"
                                name="update_middle-name"
                                id="update_middle-name"
                                autocomplete="update_middle-name"
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('update_middle_name')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="update_last-name"
                            class="block text-sm font-medium text-gray-700"> Last name </label>
                        <div class="mt-1">
                            <input type="text"
                                wire:model.defer="update_last_name"
                                name="update_last-name"
                                id="update_last-name"
                                autocomplete="update_family-name"
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('update_last_name')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="update_address"
                            class="block text-sm font-medium text-gray-700"> Address </label>
                        <div class="mt-1">
                            <input id="address"
                                wire:model.defer="update_address"
                                name="update_address"
                                type="text"
                                autocomplete="update_address"
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('update_address')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="update_sex"
                            class="block text-sm font-medium text-gray-700"> Sex </label>
                        <div class="mt-1">
                            <select id="update_sex"
                                wire:model.defer="update_sex"
                                name="update_sex"
                                autocomplete="update_sex-name"
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value=""></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        @error('update_sex')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="update_contact_number"
                            class="block text-sm font-medium text-gray-700"> Contact Number </label>
                        <div class="mt-1">
                            <input type="text"
                                wire:model.defer="update_contact_number"
                                name="update_contact_number"
                                id="update_contact_number"
                                autocomplete="update_contact_number"
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('update_contact_number')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
            </div>


        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button x-on:click="action='none'"
                    type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 shadow-sm -md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                <button wire:click.prevent="update"
                    type="submit"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent shadow-sm -md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
            </div>
        </div>
    </form>
</div>
