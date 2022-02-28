<div class="grid space-y-4">
    <div class="flex items-center justify-between">
        <button x-on:click="action='create-account'" type="button"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Create New Account
        </button>
        <div>
            <div class="mt-1">
                <input type="email" wire:model.debounce="searchTerm" name="email" id="email"
                    class="block w-full border-gray-300  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Search . . .">
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-2 border-green-500 ">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-700">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                    Name</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                    Sex</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                    Address</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                    Contact Number</th>

                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($advisers as $adviser)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $adviser->first_name }} {{ $adviser->middle_name }}
                                        {{ $adviser->last_name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $adviser->sex }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $adviser->address }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $adviser->contact_number }}
                                    </td>

                                    <td
                                        class="flex px-6 py-4 space-x-2 text-sm font-medium text-right whitespace-nowrap">

                                        <a href="#" wire:click.prevent="edit('{{ $adviser->id }}')"
                                            class="text-yellow-500 hover:text-indigo-900"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-3">
                                                <path d="M12 20h9"></path>
                                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                </path>
                                            </svg></a>
                                        <a href="#"
                                            x-on:click.prevent="if(confirm('Are you sure you want to delete this data ?')){$wire.delete('{{ $adviser->id }}');}"
                                            class="text-red-600 hover:text-indigo-900"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                    </td>
                                    <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                    </td>
                                    <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                        No record found
                                    </td>
                                    <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                    </td>

                                    <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <div class="py-2">
                    {{ $advisers->links() }}
                </div>
            </div>
        </div>
    </div>

</div>
