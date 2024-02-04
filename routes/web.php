<?php

use App\Http\Controllers\Admin\GroupsController;
use App\Http\Controllers\Admin\PassportsController as AdminPassportsController;
use App\Http\Controllers\Admin\RegionsController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\PassportsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard', function(){
        return view('admin.layouts.dashboard');
    });

    Route::resource('groups', GroupsController::class);
    Route::resource('regions', RegionsController::class);
    Route::resource('students', StudentsController::class);
    Route::resource('passports', AdminPassportsController::class);

});