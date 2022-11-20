<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DinnerController;
use App\Http\Controllers\CommentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DinnerController::class, 'index'])
    ->name('root');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::resource('dinners', DinnerController::class)
//     ->only(['create', 'store', 'edit', 'update', 'destroy'])
//     ->middleware('auth');
Route::resource('dinners', DinnerController::class)
    ->middleware('auth')
    ->only(['create', 'store', 'edit', 'update', 'destroy']);

Route::resource('dinners', DinnerController::class)
    ->only(['show', 'index']);

// Route::resource('dinners.comments', CommentController::class)
//     ->only(['create', 'store', 'edit', 'update', 'destroy'])
//     ->middleware('auth');

Route::resource('dinners.comments', CommentController::class)
    ->only(['create', 'store', 'edit', 'update', 'destroy']);

// プロフィール閲覧
// Route::resource('user.profile', DinnerController::class)
//     ->only(['show'])
//     ->middleware('auth');

// Route::get('/user/{user_id}', [DinnerController::class, 'user'])->name('user.show')->middleware('auth');
Route::get('/user/{user_id}', [DinnerController::class, 'user'])->name('user.show');

require __DIR__ . '/auth.php';
