<?php

use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UrlApiController;
use App\Http\Controllers\UrlController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function(){
    return Auth::check() ? redirect('urls') : view('welcome');
})->name('/');

Route::resource('/urls', UrlController::class)
    ->middleware(['auth', 'verified'])->names('urls');

Route::middleware('auth')->group(function(){
    # API
    Route::get('/profile/api', [ApiTokenController::class, 'edit'])->name('profile.api.edit');
    Route::patch('/profile/api', [ApiTokenController::class, 'update'])->name('profile.api.update');

    # User
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/api.php';

# Handle short URLs
Route::get('/{shortenedUrl}', [UrlController::class, 'expandUrl']);
