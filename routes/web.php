<?php

use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('tambah-peserta', [VoteController::class, 'tambah_peserta'])->name('tambah-peserta');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/juri', function () {
    return view('nama-juri');
});
Route::post('masuk', [VoteController::class, 'masuk_user'])->name('masuk');
Route::get('vote-user', [VoteController::class, 'vote_user'])->name('vote-user');
Route::get('vote-juri', [VoteController::class, 'vote_juri'])->name('vote-juri');
Route::get('/update-range-user', [VoteController::class, 'updateRange'])->name('vote-user');
