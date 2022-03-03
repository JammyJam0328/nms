 <form class="mt-6 ">
     @csrf
     <div>
         <div>
             <div>
                 <h3 class="text-lg font-medium leading-6 text-gray-900">Add Parents</h3>
             </div>
             <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                 <div class="sm:col-span-3">
                     <label for="first-name"
                         class="block text-sm font-medium text-gray-700"> First name </label>
                     <div class="mt-1">
                         <input type="text"
                             wire:model.defer="first_name"
                             name="first-name"
                             id="first-name"
                             autocomplete="given-name"
                             class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                     </div>
                     @error('first_name')
                         <span class="text-xs italic text-red-500">
                             {{ $message }}
                         </span>
                     @enderror
                 </div>
                 <div class="sm:col-span-3">
                     <label for="middle-name"
                         class="block text-sm font-medium text-gray-700"> Middle name </label>
                     <div class="mt-1">
                         <input type="text"
                             wire:model.defer="middle_name"
                             name="middle-name"
                             id="middle-name"
                             autocomplete="family-name"
                             class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                     </div>
                     @error('middle_name')
                         <span class="text-xs italic text-red-500">
                             {{ $message }}
                         </span>
                     @enderror
                 </div>
                 <div class="sm:col-span-3">
                     <label for="last-name"
                         class="block text-sm font-medium text-gray-700"> Last name </label>
                     <div class="mt-1">
                         <input type="text"
                             wire:model.defer="last_name"
                             name="last-name"
                             id="last-name"
                             autocomplete="family-name"
                             class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                     </div>
                     @error('last_name')
                         <span class="text-xs italic text-red-500">
                             {{ $message }}
                         </span>
                     @enderror
                 </div>

                 <div class="sm:col-span-3">
                     <label for="contact_number"
                         class="block text-sm font-medium text-gray-700"> Contact Number </label>
                     <div class="mt-1">
                         <input id="contact_number"
                             wire:model.defer="contact_number"
                             name="contact_number"
                             type="number"
                             class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                     </div>
                     @error('contact_number')
                         <span class="text-xs italic text-red-500">
                             {{ $message }}
                         </span>
                     @enderror
                 </div>

                 <div class="sm:col-span-3">
                     <label for="country"
                         class="block text-sm font-medium text-gray-700"> Relationship </label>
                     <div class="mt-1">
                         <select id="country"
                             wire:model.defer="relationship"
                             name="country"
                             autocomplete="country-name"
                             class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                             <option value="mother">Mother</option>
                             <option value="father">Father</option>
                             <option value="other">Other</option>
                         </select>
                         @error('relationship')
                             <span class="text-xs italic text-red-500">
                                 {{ $message }}
                             </span>
                         @enderror
                     </div>
                 </div>

             </div>
         </div>

     </div>

     <div class="pt-5">
         <div class="flex justify-end">
             <button x-on:click="action=''"
                 type="button"
                 class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
             <button wire:click.prevent="addParent"
                 type="submit"
                 class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
         </div>
     </div>
 </form>
