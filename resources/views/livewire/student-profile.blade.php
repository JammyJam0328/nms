<div class="mx-2 lg:mx-auto mt-8 sm:px-6 lg:max-w-7xl">
    <div class="flex space-x-2 items-center">
        <a href="{{route('student.dashboard')}}" class="bg-gray-700 text-white hover:bg-gray-800 px-4 uppercase rounded-lg text-lg font-bold">Back</a>
        <h1 class="text-xl font-bold text-gray-700 uppercase underline">Student Dashboard</h1>
    </div>
    <div class="mt-5 bg-white p-2 rounded-lg shadow">
        <h1 class="text-xl font-bold text-green-700">PERSONAL INFORMATION</h1>
        <div x-data="{alert:false}" x-on:notify.window="alert=true;
        document.querySelector('#type').innerHTML = event.detail.type;
        document.querySelector('#message').innerHTML=event.detail.message;
        setTimeout(function(){
            alert=false;
        },2000);">
                <div x-cloak x-show="alert">
                    <div :class="type=='error'?'bg-red-500':'bg-green-500'"
                        class="flex justify-between rounded-md p-3 mb-2 text-white shadow-inner">
                        <p class="self-center">
                            <strong class="uppercase" id="type"></strong> <span id="message"></span>
                        </p>
                    </div>
                </div>
            </div>
        <div class="mt-2">
            <form>
                @csrf
                <div class="space-y-8 divide-y divide-gray-200">
                    <div class="bg-white shadow-lg">
                        <div class="bg-green-700 h-1 w-full"></div>
                       <div class="p-4 ">
                        
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
        
                </div>
        
                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="button"
                            wire:click.prevent="updateStudent"
                            class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-green-600 border border-transparent shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Update</button>
                    </div>
                </div>
            </form>
        
        </div>
    </div>
</div>
