<?php


use App\Models\Post;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});
// Route::get('/karyawan', function () {
//     return view('karyawan', [
//         "title" => "Karyawan",
//     ]);
// });

Route::get('/karyawan', [KaryawanController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/postCreate', [PostController::class, 'create']);
Route::post('/postStore', [PostController::class, 'store']);
Route::get('/post/checkSlug', [PostController::class, 'checkSlug']);
Route::get('/postEdit/{post:slug}', [PostController::class, 'edit']);
Route::get('/postDelete/{post:slug}', [PostController::class, 'destroy']);
Route::post('/postUpdate/{post:slug}', [PostController::class, 'update']);

Route::get('/about', [PostController::class, 'index']);
Route::get('/abouts/{post:slug}', [PostController::class, 'show']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
