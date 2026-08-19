<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newscontroller;


Route::get('/', function () {
    return redirect('/news');
});

Route::get('/news',[newsController::class,'index'])->name('index');
Route::get('/business',[newsController::class,'business'])->name('business');
Route::get('/overige',[newsController::class,'overige'])->name('overige');