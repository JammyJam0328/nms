<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
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
});

Route::prefix('adviser')->middleware(['auth:sanctum', 'verified','isAdviser'])->group(function () {
    Route::get('/', function () {
       return view('adviser-pages.dashboard');
    })->name('adviser.dashboard');
    Route::get('/my-students',function(){
        return view('adviser-pages.my-students');
    })->name('adviser.my-students');
    
});