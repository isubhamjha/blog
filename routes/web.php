<?php

use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\CategoriesController;
use App\Models\Categories;
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
Route::resource('/admin/posts', PostsController::class);
Route::get('/admin/posts/category/{category_id}', [PostsController::class, 'index'])->name('posts.index');
Route::resource('/admin/categories', CategoriesController::class);

