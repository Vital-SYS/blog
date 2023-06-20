<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Tag as Tag;
use App\Http\Controllers\Person as Person;
use App\Http\Controllers\Admin\Post as Post;


use App\Http\Controllers\Admin\User as User;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Category as Category;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Post\Comment\StoreController;
use App\Http\Controllers\Person\Comment\EditController;
use App\Http\Controllers\Person\Comment\DeleteController;
use App\Http\Controllers\Person\Comment\UpdateController;

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

Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
    Route::get('/', [IndexController::class, '__invoke'])->name('main.index');
});

Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
    Route::get('/', [IndexController::class, '__invoke'])->name('category.index');
});

Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
    Route::get('/', [\App\Http\Controllers\Post\IndexController::class, '__invoke'])->name('post.index');
    Route::get('/{post}', [ShowController::class, '__invoke'])->name('post.show');

    Route::group(['namespace' => 'Comment', 'prefix' => '{post}'], function () {
        Route::post('', [\App\Http\Controllers\Post\Comment\StoreController::class, '__invoke'])->name('post.comment.store');
    });

    Route::group(['namespace' => 'Like', 'prefix' => '{post}/likes'], function () {
        Route::post('', [\App\Http\Controllers\Post\Like\StoreController::class, '__invoke'])->name('post.like.store');
    });
});

Route::group(['namespace' => 'Person', 'prefix' => 'person', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/main', [\App\Http\Controllers\Person\Main\IndexController::class, '__invoke'])->name('person.main.index');

    Route::group(['namespace' => 'Liked', 'prefix' => 'liked'], function () {
        Route::get('/', [\App\Http\Controllers\Person\Liked\IndexController::class, '__invoke'])->name('person.liked.index');
        Route::delete('/{post}', [\App\Http\Controllers\Person\Liked\DeleteController::class, '__invoke'])->name('person.liked.delete');
    });
    Route::group(['namespace' => 'Comment', 'prefix' => 'comment'], function () {
        Route::get('/', [Person\Comment\IndexController::class, '__invoke'])->name('person.comment.index');
        Route::get('/{comment}/edit', [Person\Comment\EditController::class, '__invoke'])->name('person.comment.edit');
        Route::patch('/{comment}', [Person\Comment\UpdateController::class, '__invoke'])->name('person.comment.update');
        Route::delete('/{comment}', [Person\Comment\DeleteController::class, '__invoke'])->name('person.comment.delete');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [AdminController::class, '__invoke'])->name('admin.main.index');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', [Post\IndexController::class, '__invoke'])->name('admin.post.index');
        Route::get('/create', [Post\CreateController::class, '__invoke'])->name('admin.post.create');
        Route::post('/', Post\StoreController::class)->name('admin.post.store');
        Route::get('/{post}', [Post\ShowController::class, '__invoke'])->name('admin.post.show');
        Route::get('/{post}/edit', [Post\EditController::class, '__invoke'])->name('admin.post.edit');
        Route::patch('/{post}', [Post\UpdateController::class, '__invoke'])->name('admin.post.update');
        Route::delete('/{post}', [Post\DeleteController::class, '__invoke'])->name('admin.post.delete');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', [Category\IndexController::class, '__invoke'])->name('admin.category.index');
        Route::get('/create', [Category\CreateController::class, '__invoke'])->name('admin.category.create');
        Route::post('/', [Category\StoreController::class, '__invoke'])->name('admin.category.store');
        Route::get('/{category}', [Category\ShowController::class, '__invoke'])->name('admin.category.show');
        Route::get('/{category}/edit', [Category\EditController::class, '__invoke'])->name('admin.category.edit');
        Route::patch('/{category}', [Category\UpdateController::class, '__invoke'])->name('admin.category.update');
        Route::delete('/{category}', [Category\DeleteController::class, '__invoke'])->name('admin.category.delete');
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', [Tag\IndexController::class, '__invoke'])->name('admin.tag.index');
        Route::get('/create', [Tag\CreateController::class, '__invoke'])->name('admin.tag.create');
        Route::post('/', [Tag\StoreController::class, '__invoke'])->name('admin.tag.store');
        Route::get('/{tag}', [Tag\ShowController::class, '__invoke'])->name('admin.tag.show');
        Route::get('/{tag}/edit', [Tag\EditController::class, '__invoke'])->name('admin.tag.edit');
        Route::patch('/{tag}', [Tag\UpdateController::class, '__invoke'])->name('admin.tag.update');
        Route::delete('/{tag}', [Tag\DeleteController::class, '__invoke'])->name('admin.tag.delete');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', [User\IndexController::class, '__invoke'])->name('admin.user.index');
        Route::get('/create', [User\CreateController::class, '__invoke'])->name('admin.user.create');
        Route::post('/', [User\StoreController::class, '__invoke'])->name('admin.user.store');
        Route::get('/{user}', [User\ShowController::class, '__invoke'])->name('admin.user.show');
        Route::get('/{user}/edit', [User\EditController::class, '__invoke'])->name('admin.user.edit');
        Route::patch('/{user}', [User\UpdateController::class, '__invoke'])->name('admin.user.update');
        Route::delete('/{user}', [User\DeleteController::class, '__invoke'])->name('admin.user.delete');
    });
});


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
