<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Clans;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('clans', Clans::class)->name('clans');
