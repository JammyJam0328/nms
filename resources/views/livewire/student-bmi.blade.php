<div>
      <ul class="bg-blue-400">
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
      </ul>
</div>
