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

Route::group(['prefix' => 'makes'], function () {
    Route::get('/', [App\Http\Controllers\Make\IndexController::class, '__invoke'])->name('make.index');
    Route::get('/create', [App\Http\Controllers\Make\CreateController::class, '__invoke'])->name('make.create');
    Route::post('/', [App\Http\Controllers\Make\StoreController::class, '__invoke'])->name('make.store');
    Route::get('/{make}/edit', [App\Http\Controllers\Make\EditController::class, '__invoke'])->name('make.edit');
    Route::get('/{make}', [App\Http\Controllers\Make\ShowController::class, '__invoke'])->name('make.show');
    Route::patch('/{make}', [App\Http\Controllers\Make\UpdateController::class, '__invoke'])->name('make.update');
    Route::delete('/{make}', [App\Http\Controllers\Make\DeleteController::class, '__invoke'])->name('make.delete');
});

Route::group(['prefix' => 'models'], function () {
    Route::get('/', [App\Http\Controllers\Model\IndexController::class, '__invoke'])->name('model.index');
    Route::get('/model', [App\Http\Controllers\Model\CreateController::class, '__invoke'])->name('model.create');
    Route::post('/', [App\Http\Controllers\Model\StoreController::class, '__invoke'])->name('model.store');
    Route::get('/{model}/edit', [App\Http\Controllers\Model\EditController::class, '__invoke'])->name('model.edit');
    Route::get('/{model}', [App\Http\Controllers\Model\ShowController::class, '__invoke'])->name('model.show');
    Route::patch('/{model}', [App\Http\Controllers\Model\UpdateController::class, '__invoke'])->name('model.update');
    Route::delete('/{model}', [App\Http\Controllers\Model\DeleteController::class, '__invoke'])->name('model.delete');

});

Route::group(['prefix' => 'cars'], function () {
    Route::get('/', [App\Http\Controllers\Car\IndexController::class, '__invoke'])->name('car.index');
    Route::get('/car', [App\Http\Controllers\Car\CreateController::class, '__invoke'])->name('car.create');
    Route::post('/', [App\Http\Controllers\Car\StoreController::class, '__invoke'])->name('car.store');
    Route::get('/{car}/edit', [App\Http\Controllers\Car\EditController::class, '__invoke'])->name('car.edit');
    Route::get('/{car}', [App\Http\Controllers\Car\ShowController::class, '__invoke'])->name('car.show');
    Route::patch('/{car}', [App\Http\Controllers\Car\UpdateController::class, '__invoke'])->name('car.update');
    Route::delete('/{car}', [App\Http\Controllers\Car\DeleteController::class, '__invoke'])->name('car.delete');

});
