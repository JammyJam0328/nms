<div>
    <form class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200">
            <div class="bg-white shadow-lg">
                <div class="bg-green-800 h-1 w-full"></div>
               <div class="p-4">
                <div>
                    <h3 class="text-lg font-bold leading-6 text-gray-800">Personal Information</h3>
                </div>
                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="first-name"
                            class="block text-sm font-medium text-gray-700"> First name </label>
                        <div class="mt-1">
                            <input type="text"
                                wire:model.defer="first_name"
                                name="first-name"
                                id="first-name"
                                autocomplete="given-name"
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('first_name')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="middle-name"
                            class="block text-sm font-medium text-gray-700"> Middle name </label>
                        <div class="mt-1">
                            <input type="text"
                                wire:model.defer="middle_name"
                                name="middle-name"
                                id="middle-name"
                                autocomplete="middle-name"
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('middle_name')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
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
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('last_name')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="address"
                            class="block text-sm font-medium text-gray-700"> Address </label>
                        <div class="mt-1">
                            <input id="address"
                                wire:model.defer="address"
                                name="address"
                                type="text"
                                autocomplete="address"
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('address')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="sex"
                            class="block text-sm font-medium text-gray-700"> Sex </label>
                        <div class="mt-1">
                            <select id="sex"
                                wire:model.defer="sex"
                                name="sex"
                                autocomplete="sex-name"
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value=""></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        @error('sex')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="contact_number"
                            class="block text-sm font-medium text-gray-700"> Contact Number </label>
                        <div class="mt-1">
                            <input type="text"
                                wire:model.defer="contact_number"
                                name="contact_number"
                                id="contact_number"
                                autocomplete="contact_number"
                                class="block w-full border-gray-300 shadow-sm -md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('contact_number')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
               </div>
            </div>


        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button x-on:click="action='none'"
                    type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 shadow-sm -md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                <button wire:click.prevent="create"
                    type="submit"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent shadow-sm -md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
        </div>
    </form>
</div>
