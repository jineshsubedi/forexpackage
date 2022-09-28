<?php

use Illuminate\Support\Facades\Route;

Route::get('forex', [Jinesh\Forex\ForexController::class, 'index']);
Route::get('forex/today', [Jinesh\Forex\ForexController::class, 'today']);
Route::get('forex/yesterday', [Jinesh\Forex\ForexController::class, 'yesterday']);