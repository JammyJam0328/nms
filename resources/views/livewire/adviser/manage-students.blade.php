<div x-data="{tab:'section-list'}">
    <div>
        <div>
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8"
                    aria-label="Tabs">
                    <!-- Current: "border-green-500 text-green-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                    <button x-on:click="tab='section-list'"
                        x-bind:class="tab=='section-list' ? 'border-green-500 text-green-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="border-transparent  whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Sections</button>
                    <button x-on:click="tab='student-list'"
                        x-bind:class="tab=='student-list' ? 'border-green-500 text-green-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Students </button>
                </nav>
            </div>
        </div>
    </div>
    <div class="my-5">
        <div x-show="tab=='section-list'">
            <livewire:adviser.manage-students.manage-section />
        </div>
    </div>
</div>
