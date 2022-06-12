<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceItemController;
use App\Http\Controllers\MediaTypeController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\SearchController;
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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return redirect('/home');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class,'index'])
        ->name('dashboard');
    Route::get('/search', [SearchController::class,'search'])
        ->name('search');
    Route::get('/albums/export', [AlbumController::class,'export'])
        ->name('albums.export');
    Route::resource('customers', CustomerController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('invoice-items', InvoiceItemController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::resource('albums', AlbumController::class);
    Route::resource('artists', ArtistController::class);
    Route::resource('genres', GenreController::class);
    Route::resource('media-types', MediaTypeController::class);
    Route::resource('playlists', PlaylistController::class);
    Route::resource('tracks', TrackController::class);

});
Route::middleware(['can:is-admin'])->group(function () {
    Route::resource('customers', CustomerController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('invoice-items', InvoiceItemController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::resource('media-types', MediaTypeController::class);
    Route::resource('artists', ArtistController::class)->only(['edit','store','destroy']);
    Route::resource('albums', AlbumController::class)->only(['edit','store','destroy']);
    Route::resource('tracks', TrackController::class)->only(['edit','store','destroy']);
    Route::resource('playlists', PlaylistController::class)->only(['edit','store','destroy']);
    Route::resource('genres', GenreController::class)->only(['edit','store','destroy']);
    Route::get('/playlist/tracks', [PlaylistController::class,'create']);
});
