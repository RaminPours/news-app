<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newscontroller;


Route::get('/', function () {
    return redirect('/news');
});

Route::get('/news',[newscontroller::class,'index'])->name('index');

