<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']);


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('post/{slug}', [PostController::class, 'single']);
Route::get('projects', [HomeController::class, 'projects']);
Route::get('about', [HomeController::class, 'about']);
Route::post('feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('tags/{winkTag}', [PostController::class, 'tag']);