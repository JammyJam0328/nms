<div class="grid space-y-4">
    <div class="flex items-center justify-between">
        <button x-on:click="action='create-student'"
            type="button"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Create New Student
        </button>
        <div>
            <div class="mt-1">
                <input type="email"
                    wire:model.debounce="searchTerm"
                    name="email"
                    id="email"
                    class="block w-full border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Search . . .">
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-2 border-green-500 ">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-yellow-500">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                    Name</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                    Date of Birth</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                    Age</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                    Sex</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                    Address</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                    Contact Number</th>
                                <th scope="col"
                                    class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($students as $student)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $student->first_name }} {{ $student->middle_name }}
                                        {{ $student->last_name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $student->date_of_birth }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $student->age }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $student->sex }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $student->address }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $student->contact_number }}
                                    </td>

                                    <td
                                        class="flex px-6 py-4 space-x-2 text-sm font-medium text-right whitespace-nowrap">

                                        <button type="button"
                                            wire:click.prevent="edit('{{ $student->id }}')"
                                            class="text-yellow-500 hover:text-indigo-900">Edit</button>
                                        <button type="button"
                                            x-on:click.prevent="if(confirm('Are you sure?')){$wire.deleteStudent('{{ $student->id }}')}"
                                            class="text-red-600 hover:text-indigo-900">Delete</button>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <div class="py-2">
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>

</div>
