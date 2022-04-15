<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdviserController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\AdminController;
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
        case 'parent':
            return redirect()->route('parent.dashboard');
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
    Route::get('/charts/nutritional-status',function(){
        return view('admin-pages.nutritional-status');
    })->name('admin.chart-status');
    Route::get('/charts/nutritional-status/print',function(){
        return view('admin-pages.nutritional-status-print');
    })->name('admin.chart-status-print');
    Route::get('/charts/hfa',function(){
        return view('admin-pages.hfa');
    })->name('admin.chart-hfa');
    Route::get('/report-print',function(){
        return view('admin-pages.report-print',[
            'month' => request()->month,
            'year' => request()->year,
            'section' => request()->section,
        ]);
    })->name('admin.report-print');

    Route::get('/report-print-all',function(){
        return view('admin-pages.report-print-all',[
            'month' => request()->month,
            'year' => request()->year,
            
        ]);
    })->name('admin.report-print-all');
     Route::get('/monitoring',function(){
        return view('admin-pages.monitoring');
     })->name('admin.monitoring');

     Route::get('/monitor/student/{id}',[AdminController::class,'monitorstudent'])->name('admin.monitoring-student');
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
    Route::get('/monitor-students/{id}', [AdviserController::class,'monitoring'])->name('adviser.monitoring');

    
});

Route::prefix('student')->middleware(['auth:sanctum', 'verified','isStudent'])->group(function () {
    Route::get('/', function () {
       return view('student-pages.dashboard');
    })->name('student.dashboard');
    Route::get('/profile', function () {
       return view('student-pages.profile');
    })->name('student.profile');
   
    
});
Route::prefix('parent')->middleware(['auth:sanctum', 'verified','isParent'])->group(function () {
    Route::get('/', [ParentController::class,'index'])->name('parent.dashboard');
});

use App\Helper\GetBmi;

Route::get('/test',function(){
    $data =  GetBmi::getGradeSeventh('2021');
    dd($data);
});