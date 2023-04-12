<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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


route::get('/',[HomeController::class, 'userpage']);
route::get('/',[HomeController::class, 'aboutus']);
route::get('/',[HomeController::class, 'benefits']);
route::get('/',[HomeController::class, 'status']);
route::get('/',[HomeController::class, 'homepageafter']);
route::get('/',[HomeController::class, 'shop']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class, 'redirect']);

Route::get('/userpage', [HomeController::class, 'userpage'])->name(name: 'userpage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name(name: 'aboutus');
Route::get('/benefits', [HomeController::class, 'benefits'])->name(name: 'benefits');
Route::get('/status', [HomeController::class, 'status'])->name(name: 'status');
Route::get('/homepageafter', [HomeController::class, 'homepageafter'])->name(name: 'homepageafter');
Route::get('/shop', [HomeController::class, 'shop'])->name(name: 'shop');

route::get('/view_games',[AdminController::class, 'view_games']);

route::post('/tambah_game',[AdminController::class, 'tambah_game']);

route::get('/show_games',[AdminController::class, 'show_games']);

route::get('/hapus_games/{id}',[AdminController::class, 'hapus_games']);

route::get('/edit_games/{id}',[AdminController::class, 'edit_games']);

route::post('/edit_games_confirm/{id}',[AdminController::class, 'edit_games_confirm']);

route::get('/detail_games/{id}',[HomeController::class, 'detail_games']);

route::post('/tambah_pesanan/{id}',[HomeController::class, 'tambah_pesanan']);