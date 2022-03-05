<div>
      {{-- <ul class="bg-blue-400">
        @foreach ($bmis as $bmi)
        <li class="bg-white">
          <div class="bg-yellow-300 h-0.5"></div>
          <div class="p-1 border shadow px-3 rounded-b-md flex flex-col">
            <span class="font-bold uppercase text-gray-700">{{$bmi->bmi}}</span>
            <span class="font-bold uppercase text-gray-700">{{$bmi->status}}</span>
            <span class="font-bold uppercase text-gray-700">{{$bmi->height_for_age}}</span>
            <span class="flex justify-end">{{$bmi->created_at->format('m-d-y')}}</span>
          </div>
        </li>
        @endforeach
      </ul> --}}

      <div class="flex space-x-3">
        <div class=" w-4/12">
        <div class="bg-white px-4 shadow py-4">
          <div>
            <label for="company-website"
                class="block text-sm font-medium text-gray-700">Height</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span
                    class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">m</span>
                <input type="number" name="company-website" wire:model="height"
                    id="company-website"
                    class="flex-1 min-w-0 block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300"
                    >
            </div>
            @error('height') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="company-website"
                class="block text-sm font-medium text-gray-700">Weight</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <span
                    class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">kg</span>
                <input type="number" name="company-website" wire:model="weight"
                    id="company-website"
                    class="flex-1 min-w-0 block w-full px-3 py-2 rounded-none rounded-r-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300"
                    >
            </div>
            @error('weight') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
        </div>
        <button wire:click="showBMI" class="bg-green-700 px-2 mt-2 text-white rounded-md hover:bg-green-900">Add BMI</button>
        </div>
      </div>
        <div class=" w-8/12">
          <div class="md:flex md:items-center md:justify-between md:space-x-5 bg-gray-600 p-2">
            <div class="flex items-center  space-x-5">
              <div class="flex-shrink-0">
                <div class="relative">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42" height="42" viewBox="0 0 42 42"><defs><linearGradient id="b" x1="1073.403" x2="1097.116" y1="516.451" y2="544.308" gradientTransform="translate(-1438.388 316.47) scale(1.34562)" gradientUnits="userSpaceOnUse" xlink:href="#a"/><linearGradient id="a"><stop offset="0" stop-color="#16ff6a"/><stop offset="1" stop-color="#0090a5"/></linearGradient></defs><g transform="translate(0 -1010.362)"><rect width="42" height="42" y="1010.362" fill="url(#b)" rx="8.876" ry="8.876"/><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" fill-rule="evenodd" d="m 21.480469,1018.7954 c -3.021901,0 -5.4805,2.4692 -5.480469,5.5 2.9e-5,3.0308 2.458611,5.5 5.480469,5.5 3.021858,0 5.48044,-2.4692 5.480469,-5.5 3e-5,-3.0308 -2.458568,-5.5 -5.480469,-5.5 z m 0,1 c 2.479275,0 4.480494,2.0075 4.480469,4.5 -2.4e-5,2.4925 -2.001229,4.5 -4.480469,4.5 -2.47924,0 -4.480445,-2.0075 -4.480469,-4.5 -2.6e-5,-2.4925 2.001194,-4.5 4.480469,-4.5 z m -2.980469,11 c -4.147628,0 -7.5,3.3682 -7.5,7.5293 l 0,4.5156 a 0.50004994,0.50004994 0 0 0 0.5,0.5 l 3.853516,0 a 0.50004994,0.50004994 0 0 0 0.292968,0 l 11.707032,0 a 0.50004994,0.50004994 0 0 0 0.292968,0 l 3.853516,0 a 0.50004994,0.50004994 0 0 0 0.5,-0.5 l 0,-4.5156 c 0,-4.1611 -3.352371,-7.5293 -7.5,-7.5293 l -6,0 z m 0,1 6,0 c 3.608733,0 6.5,2.9027 6.5,6.5293 l 0,4.0156 -3,0 0,-4.0234 A 0.50004994,0.50004994 0 0 0 27.492188,1037.811 0.50004994,0.50004994 0 0 0 27,1038.3169 l 0,4.0234 -11,0 0,-4.0234 A 0.50004994,0.50004994 0 0 0 15.492188,1037.811 0.50004994,0.50004994 0 0 0 15,1038.3169 l 0,4.0234 -3,0 0,-4.0156 c 0,-3.6266 2.891267,-6.5293 6.5,-6.5293 z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible"/></g></svg>
                  <span class="absolute inset-0 shadow-inner rounded-full" aria-hidden="true"></span>
                </div>
              </div>
              <!--
                Use vertical padding to simulate center alignment when both lines of text are one line,
                but preserve the same layout if the text wraps without making the image jump around.
              -->
              <div class="">
                <h1 class="text-2xl font-bold text-white">{{$student->student->first_name}} {{$student->student->middle_name[0]}}. {{$student->student->last_name}}</h1>
                <p class="text-sm leading-3 font-medium text-white">{{$student->student->sex}}</p>
              </div>
            </div>
            
          </div>
          <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 ">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-green-500">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">Height</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">Weight</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">bmi</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">bmi_status</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">height-for-age</th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody>
            <!-- Odd row -->
            @forelse ($bmis as $bmi)
            <tr class="bg-white">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$bmi->height}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$bmi->weight}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$bmi->bmi}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$bmi->status}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$bmi->height_for_age}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                <button type="button"
                                                x-on:click.prevent="if(confirm('Are you sure?')){$wire.deleteStudent('{{ $student->id }}')}"
                                                class="text-red-600 hover:text-indigo-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
              </td>
              
            </tr>

            @empty
                
            @endforelse
            <!-- Even row -->
          

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

        </div>
      </div>
</div>
