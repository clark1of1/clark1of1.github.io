<?php
use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/causes', [PageController::class, 'causes'])->name('causes');
Route::get('/effects', [PageController::class, 'effects'])->name('effects');
Route::get('/prevention', [PageController::class, 'prevention'])->name('prevention');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/game', [PageController::class, 'game'])->name('game');
