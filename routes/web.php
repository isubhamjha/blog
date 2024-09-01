<?php

use App\Http\Controllers\admin\PostsController;
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
    return view('welcome');
});


Route::post('/admin/add-posts', [PostsController::class, 'store'])->name('admin.add-posts');
Route::get('/admin/posts', [PostsController::class, 'index'])->name('admin.posts');
