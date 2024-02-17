<?php

use App\Http\Controllers\ABCExtraController;
use App\Http\Controllers\GameCardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ShortStoriesController;
use App\Http\Controllers\SoundPatternsController;
use App\Http\Controllers\StartReadingController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/abc-extra', [ABCExtraController::class, 'index'])->name('abc-extra');
Route::get('/sound-patterns', [SoundPatternsController::class, 'index'])->name('sound-patterns');
Route::get('/short-stories', [ShortStoriesController::class, 'index'])->name('short-stories');
Route::get('/game-cards', [GameCardController::class, 'index'])->name('game-cards');
Route::get('/start-reading', [StartReadingController::class, 'index'])->name('start-reading');
Route::get('/start-reading(16-22)', [StartReadingController::class, 'startReading1'])->name('start-reading(16-22)');
Route::get('/start-reading(23-29)', [StartReadingController::class, 'startReading2'])->name('start-reading(23-29)');
Route::get('/start-reading(30-36)', [StartReadingController::class, 'startReading3'])->name('start-reading(30-36)');
Route::get('/start-reading(37-43)', [StartReadingController::class, 'startReading4'])->name('start-reading(37-43)');
Route::get('/start-reading(44-50)', [StartReadingController::class, 'startReading5'])->name('start-reading(44-50)');
Route::get('/start-reading(51-58)', [StartReadingController::class, 'startReading6'])->name('start-reading(51-58)');
Route::get('/lesson', [LessonController::class, 'load'])->name('lesson');
Route::get('/pdf-viewer', function () {
    return view('pdf_viewer');
});
