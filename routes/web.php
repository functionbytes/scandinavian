<?php

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

use App\Http\Controllers\Managers\DashboardController;
use App\Http\Controllers\Managers\CarsController;
use App\Http\Controllers\Managers\PostsController;
use App\Http\Controllers\Managers\AuthorsController;
use App\Http\Controllers\Managers\LocationsController;




Route::group(['middleware' => ['web']], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/cars', [CarsController::class, 'index'])->name('cars');
    Route::get('/cars/galery/{id}', [CarsController::class, 'galery'])->name('cars.galery');

    Route::get('/posts', [PostsController::class, 'index'])->name('posts');
    Route::get('/posts/galery/{id}', [PostsController::class, 'galery'])->name('posts.galery');

    Route::get('/authors', [AuthorsController::class, 'index'])->name('authors');
    Route::get('/authors/galery/{id}', [AuthorsController::class, 'galery'])->name('authors.galery');


    Route::get('/locations', [LocationsController::class, 'index'])->name('locations');


});