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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/some', \App\Http\Controllers\SomeController::class);

Route::get('/admin', \App\Http\Controllers\Admin\Main\IndexController::class)->name('admin.main.index');

Route::group(['prefix' => '/admin/categories'], function() {
    Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('admin.category.index');
    Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)->name('admin.category.create');
    Route::post('/', \App\Http\Controllers\Admin\Category\StoreController::class)->name('admin.category.store');
    Route::get('/{category}/edit', \App\Http\Controllers\Admin\Category\EditController::class)->name('admin.category.edit');
    Route::get('/{category}', \App\Http\Controllers\Admin\Category\ShowController::class)->name('admin.category.show');
    Route::patch('/{category}', \App\Http\Controllers\Admin\Category\UpdateController::class)->name('admin.category.update');
    Route::delete('/{category}', \App\Http\Controllers\Admin\Category\DeleteController::class)->name('admin.category.delete');
});

Route::group(['prefix' => '/admin/tags'], function() {
    Route::get('/', \App\Http\Controllers\Admin\Tag\IndexController::class)->name('admin.tag.index');
    Route::get('/create', \App\Http\Controllers\Admin\Tag\CreateController::class)->name('admin.tag.create');
    Route::post('/', \App\Http\Controllers\Admin\Tag\StoreController::class)->name('admin.tag.store');
    Route::get('/{tag}/edit', \App\Http\Controllers\Admin\Tag\EditController::class)->name('admin.tag.edit');
    Route::get('/{tag}', \App\Http\Controllers\Admin\Tag\ShowController::class)->name('admin.tag.show');
    Route::patch('/{tag}', \App\Http\Controllers\Admin\Tag\UpdateController::class)->name('admin.tag.update');
    Route::delete('/{tag}', \App\Http\Controllers\Admin\Tag\DeleteController::class)->name('admin.tag.delete');
});

Route::group(['prefix' => '/admin/colors'], function() {
    Route::get('/', \App\Http\Controllers\Admin\Color\IndexController::class)->name('admin.color.index');
    Route::get('/create', \App\Http\Controllers\Admin\Color\CreateController::class)->name('admin.color.create');
    Route::post('/', \App\Http\Controllers\Admin\Color\StoreController::class)->name('admin.color.store');
    Route::get('/{color}/edit', \App\Http\Controllers\Admin\Color\EditController::class)->name('admin.color.edit');
    Route::get('/{color}', \App\Http\Controllers\Admin\Color\ShowController::class)->name('admin.color.show');
    Route::patch('/{color}', \App\Http\Controllers\Admin\Color\UpdateController::class)->name('admin.color.update');
    Route::delete('/{color}', \App\Http\Controllers\Admin\Color\DeleteController::class)->name('admin.color.delete');
});

Route::group(['prefix' => '/admin/users'], function() {
    Route::get('/', \App\Http\Controllers\Admin\User\IndexController::class)->name('admin.user.index');
    Route::get('/create', \App\Http\Controllers\Admin\User\CreateController::class)->name('admin.user.create');
    Route::post('/', \App\Http\Controllers\Admin\User\StoreController::class)->name('admin.user.store');
    Route::get('/{user}/edit', \App\Http\Controllers\Admin\User\EditController::class)->name('admin.user.edit');
    Route::get('/{user}', \App\Http\Controllers\Admin\User\ShowController::class)->name('admin.user.show');
    Route::patch('/{user}', \App\Http\Controllers\Admin\User\UpdateController::class)->name('admin.user.update');
    Route::delete('/{user}', \App\Http\Controllers\Admin\User\DeleteController::class)->name('admin.user.delete');
});

Route::group(['prefix' => '/admin/products'], function() {
    Route::get('/', \App\Http\Controllers\Admin\Product\IndexController::class)->name('admin.product.index');
    Route::get('/create', \App\Http\Controllers\Admin\Product\CreateController::class)->name('admin.product.create');
    Route::post('/', \App\Http\Controllers\Admin\Product\StoreController::class)->name('admin.product.store');
    Route::get('/{product}/edit', \App\Http\Controllers\Admin\Product\EditController::class)->name('admin.product.edit');
    Route::get('/{product}', \App\Http\Controllers\Admin\Product\ShowController::class)->name('admin.product.show');
    Route::patch('/{product}', \App\Http\Controllers\Admin\Product\UpdateController::class)->name('admin.product.update');
    Route::delete('/{product}', \App\Http\Controllers\Admin\Product\DeleteController::class)->name('admin.product.delete');
});
