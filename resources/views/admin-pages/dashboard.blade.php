@extends('layouts.admin')
@section('header')
    Dashboard
@endsection
@section('content')
    <div>
        <ul role="list"
            class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @php
           
            $seven = \App\Models\Student::whereHas('sectionstudent', function($q){
                $q->whereHas('section', function($q){
                    $q->where('grade_level', '7th')->whereYear('created_at', '=', \Carbon\Carbon::now()->year);
                });
            })->count();

            $eight = \App\Models\Student::whereHas('sectionstudent', function($q){
                $q->whereHas('section', function($q){
                    $q->where('grade_level', '8th')->whereYear('created_at', '=', \Carbon\Carbon::now()->year);
                });
            })->count();

            $nine = \App\Models\Student::whereHas('sectionstudent', function($q){
                $q->whereHas('section', function($q){
                    $q->where('grade_level', '9th')->whereYear('created_at', '=', \Carbon\Carbon::now()->year);
                });
            })->count();

            $ten = \App\Models\Student::whereHas('sectionstudent', function($q){
                $q->whereHas('section', function($q){
                    $q->where('grade_level', '10th')->whereYear('created_at', '=', \Carbon\Carbon::now()->year);
                });
            })->count();

            $eleven = \App\Models\Student::whereHas('sectionstudent', function($q){
                $q->whereHas('section', function($q){
                    $q->where('grade_level', '11th')->whereYear('created_at', '=', \Carbon\Carbon::now()->year);
                });
            })->count();

            $twelve = \App\Models\Student::whereHas('sectionstudent', function($q){
                $q->whereHas('section', function($q){
                    $q->where('grade_level', '12th')->whereYear('created_at', '=', \Carbon\Carbon::now()->year);
                });
            })->count();
        @endphp
            <li class="bg-white shadow-md border-b-4 border-gray-700 rounded-md flex p-2 py-5">
                <div class=" w-3/12 flex justify-center items-center">
                   <div class="bg-gray-700 text-white p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                      </svg> 
                   </div>
                </div>
                <div class="w-9/12 flex flex-col text-gray-700">
                    <h1 class="font-bold uppercase  underline">GRADE 7 Students</h1>
                    <h1 class="font-bold text-lg">{{$seven}}</h1>
                </div>
            </li>
            <li class="bg-white shadow-md border-b-4 border-green-700 rounded-md flex p-2 py-5">
                <div class=" w-3/12 flex justify-center items-center">
                   <div class="bg-green-700 text-white p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                      </svg> 
                   </div>
                </div>
                <div class="w-9/12 flex flex-col text-grreay-700">
                    <h1 class="font-bold uppercase  underline">GRADE 8 Students</h1>
                    <h1 class="font-bold text-lg">{{$eight}}</h1>
                </div>
            </li>

            <li class="bg-white shadow-md border-b-4 border-blue-700 rounded-md flex p-2 py-5">
                <div class=" w-3/12 flex justify-center items-center">
                   <div class="bg-blue-700 text-white p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                      </svg> 
                   </div>
                </div>
                <div class="w-9/12 flex flex-col text-gray-700">
                    <h1 class="font-bold uppercase  underline">GRADE 9 Students</h1>
                    <h1 class="font-bold text-lg">{{$nine}}</h1>
                </div>
            </li>

            <li class="bg-white shadow-md border-b-4 border-red-700 rounded-md flex p-2 py-5">
                <div class=" w-3/12 flex justify-center items-center">
                   <div class="bg-red-700 text-white p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                      </svg> 
                   </div>
                </div>
                <div class="w-9/12 flex flex-col text-gray-700">
                    <h1 class="font-bold uppercase  underline">GRADE 10 Students</h1>
                    <h1 class="font-bold text-lg">{{$ten}}</h1>
                </div>
            </li>

            <li class="bg-white shadow-md border-b-4 border-yellow-700 rounded-md flex p-2 py-5">
                <div class=" w-3/12 flex justify-center items-center">
                   <div class="bg-yellow-700 text-white p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                      </svg> 
                   </div>
                </div>
                <div class="w-9/12 flex flex-col text-gray-700">
                    <h1 class="font-bold uppercase  underline">GRADE 11 Students</h1>
                    <h1 class="font-bold text-lg">{{$eleven}}</h1>
                </div>
            </li>

            <li class="bg-white shadow-md border-b-4 border-indigo-700 rounded-md flex p-2 py-5">
                <div class=" w-3/12 flex justify-center items-center">
                   <div class="bg-indigo-700 text-white p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                      </svg> 
                   </div>
                </div>
                <div class="w-9/12 flex flex-col text-gray-700">
                    <h1 class="font-bold uppercase  underline">GRADE 12 Students</h1>
                    <h1 class="font-bold text-lg">{{$twelve}}</h1>
                </div>
            </li>
        </ul>
        
        <div class="bg-gray-400 h-1 my-5"></div>
        <ul role="list"
        class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
        

        <li class="bg-white shadow-md border-b-4 border-green-700 rounded-md flex p-2 py-5">
            <div class=" w-3/12 flex justify-center items-center">
               <div class="bg-green-700 text-white p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                  </svg> 
               </div>
            </div>
            <div class="w-9/12 flex flex-col text-gray-700">
                <h1 class="font-bold uppercase  underline">TOTAL USERS</h1>
                <h1 class="font-bold text-lg">{{\App\Models\User::count()}}</h1>
            </div>
        </li>
        <li class="bg-white shadow-md border-b-4 border-gray-700 rounded-md flex p-2 py-5">
            <div class=" w-3/12 flex justify-center items-center">
               <div class="bg-gray-700 text-white p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                  </svg> 
               </div>
            </div>
            <div class="w-9/12 flex flex-col text-gray-700">
                <h1 class="font-bold uppercase  underline">TOTAL ADVISERS</h1>
                <h1 class="font-bold text-lg">{{\App\Models\Adviser::count()}}</h1>
            </div>
        </li>
        <li class="bg-white shadow-md border-b-4 border-red-700 rounded-md flex p-2 py-5">
            <div class=" w-3/12 flex justify-center items-center">
               <div class="bg-red-700 text-white p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                  </svg> 
               </div>
            </div>
            <div class="w-9/12 flex flex-col text-gray-700">
                <h1 class="font-bold uppercase  underline">TOTAL PARENTS</h1>
                <h1 class="font-bold text-lg">{{\App\Models\StudentParent::count()}}</h1>
            </div>
        </li>
    </ul>
    </div>
@endsection
