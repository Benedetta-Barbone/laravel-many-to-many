<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\HomeController as GuestHomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [GuestHomeController::class, 'index'])->name('home');
Route::post('admin/posts/create', [AdminPostController::class, 'store']);



Route::middleware('auth')->name('admin.')->prefix('admin/')->group(
    function(){
        Route::resource("posts", AdminPostController::class);
    });
