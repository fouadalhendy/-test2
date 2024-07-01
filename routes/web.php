<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Category;
use App\Models\coment;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [PostController::class, 'index'])->name('post.index');
    route::get('/create', [PostController::class, 'create'])->name('post.create');
    route::get('/show/{id}', [PostController::class, 'show'])->name('post.show');
    route::get('/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
    route::post('/store', [PostController::class, 'store'])->name('post.store');
    route::put('/update/{Post}', [PostController::class, 'update'])->name('post.update');
    route::DELETE('/destroy/{post}', [PostController::class, 'destroy'])->name('post.destroy');


    Route::get('/category', [CategoryController::class, 'index'])->name('category.user');

    Route::get('/category/create', [CategoryController::class, 'create'])->name('cat.creat');

    Route::post('/category/create', [CategoryController::class, 'store'])->name('cate.storm');

    Route::post('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('cate.destroy');

    route::post('/create/{id}', [ComentController::class, 'store'])->name('post.comtag');


    route::DELETE('/destroy2/{us}', [authController::class, 'destroy2'])->name('delet.user');

    route::get('/admin', [authController::class, 'admin'])->name('admin.user');

    route::post('/show/{idpost}', [TagController::class, 'show'])->name('tag.show');

    route::post('/store/{idpost}', [TagController::class, 'store'])->name('tag.create');

    Route::post('logout', [authController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/',[AuthController::class, 'index']);

    Route::post('login', [authController::class, 'login'])->name('login');

    Route::get('reg', [authController::class, 'create'])->name('reg');
    Route::post('regester', [authController::class, 'store'])->name('regester');

});
