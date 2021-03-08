<?php

use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[PagesController::class, 'home'])->name('home');
Route::get('/search',[SearchController::class, 'index'])->name('search');
Route::get('/plans',[PagesController::class, 'pricing'])->name('pricing');
Route::get('/course/single-course-slug',[PagesController::class, 'singleCourse'])->name('singleCourse');

Auth::routes();

Route::get('/account', [HomeController::class, 'index'])->name('home');
Route::get('/account/watchlists',[HomeController::class, 'watchlists'])->name('watchlists');
Route::get('/account/suscriptions',[HomeController::class, 'suscriptions'])->name('suscriptions');
