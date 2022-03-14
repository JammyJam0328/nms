<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdviserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if (!auth()->user()) {
        return redirect('/login');
    }
    switch (auth()->user()->role) {
        case 'admin':
            return redirect()->route('admin.dashboard');
            break;
        case 'adviser':
            return redirect()->route('adviser.dashboard');
            break;
        case 'student':
            return redirect()->route('student.dashboard');
            break;
        default:
            return redirect('/login');
            break;
    }
})->name('dashboard');

// make route groups for admin with admin prefix
Route::prefix('admin')->middleware(['auth:sanctum', 'verified','isAdmin'])->group(function () {
    Route::get('/', function () {
        return view('admin-pages.dashboard');
    })->name('admin.dashboard');

    Route::get('/manage/accounts',function(){
        return view('admin-pages.accounts');
    })->name('admin.accounts');
     Route::get('/manage/students',function(){
        return view('admin-pages.students');
    })->name('admin.students');

    Route::get('/meal-plan',function(){
        return view('admin-pages.meal-plan');
    })->name('admin.meal-plan');
    
     Route::get('/manage/parents',function(){
        return view('admin-pages.parents');
    })->name('admin.parents');
     Route::get('/reports',function(){
        return view('admin-pages.reports');
    })->name('admin.reports');
});

Route::prefix('adviser')->middleware(['auth:sanctum', 'verified','isAdviser'])->group(function () {
    Route::get('/', function () {
       return view('adviser-pages.dashboard');
    })->name('adviser.dashboard');
    Route::get('/my-students',function(){
        return view('adviser-pages.my-students');
    })->name('adviser.my-students');
    Route::get('/my-students/section/{id}',  [AdviserController::class, 'section']
    )->name('adviser.my-section');
    Route::get('/my-students/section/student/{id}',  [AdviserController::class, 'student']
    )->name('adviser.student-bmi');
    Route::get('/monitor-students', function () {
        return view('adviser-pages.monitoring');
     })->name('adviser.monitoring');
    
});

Route::prefix('student')->middleware(['auth:sanctum', 'verified','isStudent'])->group(function () {
    Route::get('/', function () {
       return view('student-pages.dashboard');
    })->name('student.dashboard');
   
    
});


use App\Helper\GetBmi;

Route::get('/test',function(){
    $data =  GetBmi::getGradeSeventh('2021');
    dd($data);
});