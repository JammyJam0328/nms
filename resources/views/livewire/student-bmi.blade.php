<div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 ">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-yellow-500">
                  <tr>
                    <th scope="col" class="px-4 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                    <th scope="col" class="px-4 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                    <th scope="col" class="px-4 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                   
                  </tr>
                </thead>
                <tbody>
                  <!-- Odd row -->
                 @forelse ($bmis as $bmi)
                 <tr class="bg-white">
                     
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-700">{{number_format((float)$bmi->bmi, 2, '.', '')}}</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-bold uppercase text-gray-700">{{$bmi->status}}</td>  
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-bold uppercase text-gray-700">{{$bmi->created_at->format('M d, Y')}}</td>  
                  </tr>
                 @empty
                     <span class="italic">No BMI Available...</span>
                 @endforelse
               
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
