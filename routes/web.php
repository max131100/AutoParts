<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. CarMake something great!
|
*/

Route::get('/', [IndexController::class, '__invoke'])->name('main.index');

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [App\Http\Controllers\Category\IndexController::class, '__invoke'])->name('category.index');
    Route::get('/create', [App\Http\Controllers\Category\CreateController::class, '__invoke'])->name('category.create');
    Route::post('/', [App\Http\Controllers\Category\StoreController::class, '__invoke'])->name('category.store');
    Route::get('/{category}/edit', [App\Http\Controllers\Category\EditController::class, '__invoke'])->name('category.edit');
    Route::get('/{category}', [App\Http\Controllers\Category\ShowController::class, '__invoke'])->name('category.show');
    Route::patch('/{category}', [App\Http\Controllers\Category\UpdateController::class, '__invoke'])->name('category.update');
    Route::delete('/{category}', [App\Http\Controllers\Category\DeleteController::class, '__invoke'])->name('category.delete');
});

