<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

Route::get('/characters', [CharacterController::class, 'index'])->name('characters.index');

