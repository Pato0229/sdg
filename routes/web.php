<?php

use App\Http\Controllers\SDGController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SDGController::class, 'about']);
Route::get('home', [SDGController::class, 'about']);
Route::get('about', [SDGController::class, 'about']);
Route::get('blog', [SDGController::class, 'blog']);
Route::get('contact', [SDGController::class, 'contact']);
Route::get('about', [SDGController::class, 'about']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
