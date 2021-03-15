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
Route::get('/course/{course}',[PagesController::class, 'singleCourse'])->name('singleCourse');
Route::get('/course/{course}/episode/{episode}',[PagesController::class, 'singleEpisode'])->name('singleEpisode');

Auth::routes();

Route::get('/account', [HomeController::class, 'index'])->name('home');
Route::post('/account',[HomeController::class, 'updateProfile'])->name('updateProfile');
Route::get('/account/watchlists',[HomeController::class, 'watchlists'])->name('watchlists');
Route::get('/account/suscriptions',[HomeController::class, 'suscriptions'])->name('suscriptions');
Route::post('/watchlists',[PagesController::class, 'watchlistsStore']);
Route::delete('watchlists/{watchlists}',[PagesController::class, 'deleteWatchlists'])->name('deleteWatchlists');


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('users')->name('users/')->group(static function() {
            Route::get('/',                                             'UsersController@index')->name('index');
            Route::get('/create',                                       'UsersController@create')->name('create');
            Route::post('/',                                            'UsersController@store')->name('store');
            Route::get('/{user}/edit',                                  'UsersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UsersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{user}',                                      'UsersController@update')->name('update');
            Route::delete('/{user}',                                    'UsersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('categories')->name('categories/')->group(static function() {
            Route::get('/',                                             'CategoriesController@index')->name('index');
            Route::get('/create',                                       'CategoriesController@create')->name('create');
            Route::post('/',                                            'CategoriesController@store')->name('store');
            Route::get('/{category}/edit',                              'CategoriesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CategoriesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{category}',                                  'CategoriesController@update')->name('update');
            Route::delete('/{category}',                                'CategoriesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('courses')->name('courses/')->group(static function() {
            Route::get('/',                                             'CoursesController@index')->name('index');
            Route::get('/create',                                       'CoursesController@create')->name('create');
            Route::post('/',                                            'CoursesController@store')->name('store');
            Route::get('/{course}/edit',                                'CoursesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CoursesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{course}',                                    'CoursesController@update')->name('update');
            Route::delete('/{course}',                                  'CoursesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('episodes')->name('episodes/')->group(static function() {
            Route::get('/',                                             'EpisodesController@index')->name('index');
            Route::get('/create',                                       'EpisodesController@create')->name('create');
            Route::post('/',                                            'EpisodesController@store')->name('store');
            Route::get('/{episode}/edit',                               'EpisodesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'EpisodesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{episode}',                                   'EpisodesController@update')->name('update');
            Route::delete('/{episode}',                                 'EpisodesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('suscriptions')->name('suscriptions/')->group(static function() {
            Route::get('/',                                             'SuscriptionsController@index')->name('index');
            Route::get('/create',                                       'SuscriptionsController@create')->name('create');
            Route::post('/',                                            'SuscriptionsController@store')->name('store');
            Route::get('/{suscription}/edit',                           'SuscriptionsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SuscriptionsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{suscription}',                               'SuscriptionsController@update')->name('update');
            Route::delete('/{suscription}',                             'SuscriptionsController@destroy')->name('destroy');
        });
    });
});