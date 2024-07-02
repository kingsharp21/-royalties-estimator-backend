<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtiseController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureTokenIsValid;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/artise', [ArtiseController::class, 'index']);
Route::get('/artise/ablum_tracks', [ArtiseController::class, 'artiseAlbums'])->middleware(EnsureTokenIsValid::class);
Route::get('/artise/{id}', [ArtiseController::class, 'show']);


Route::post('/resgister', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');


Route::any('/artise', [ArtiseController::class, 'index']);

Route::group(['middleware' => 'auth:api'], function(){
});

