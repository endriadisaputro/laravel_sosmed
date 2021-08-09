<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;

Route::view('/', 'welcome');
Route::middleware('auth')->group(function(){
	Route::view('/dashboard', 'dashboard')->name('dashboard');
	Route::get('timeline', TimelineController::class)->name('timeline');
});


require __DIR__.'/auth.php';
