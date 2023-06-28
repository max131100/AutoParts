<?php

use App\Http\Controllers\Admin\Main\IndexController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');

Route::group(['prefix' => 'parts'], function () {
    Route::get('/', [App\Http\Controllers\User\Part\IndexController::class, '__invoke'])->name('user.part.index');
});

Route::group(['prefix' => 'cart', 'middleware' => 'user'], function () {
   Route::get('/', [App\Http\Controllers\User\Cart\IndexController::class, '__invoke'])->name('user.cart.index');
   Route::patch('/', [App\Http\Controllers\User\Cart\AddController::class, '__invoke'])->name('user.cart.add');
    Route::delete('/', [App\Http\Controllers\User\Cart\DeleteController::class, '__invoke'])->name('user.cart.delete');
});

Route::group(['prefix' => 'admin/', 'middleware' => 'admin'], function () {
    Route::get('/', [IndexController::class, '__invoke'])->name('main.index');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Category\IndexController::class, '__invoke'])->name('category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Category\CreateController::class, '__invoke'])->name('category.create');
        Route::post('/', [\App\Http\Controllers\Admin\Category\StoreController::class, '__invoke'])->name('category.store');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\Category\EditController::class, '__invoke'])->name('category.edit');
        Route::get('/{category}', [\App\Http\Controllers\Admin\Category\ShowController::class, '__invoke'])->name('category.show');
        Route::patch('/{category}', [\App\Http\Controllers\Admin\Category\UpdateController::class, '__invoke'])->name('category.update');
        Route::delete('/{category}', [\App\Http\Controllers\Admin\Category\DeleteController::class, '__invoke'])->name('category.delete');
    });

    Route::group(['prefix' => 'makes'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Make\IndexController::class, '__invoke'])->name('make.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Make\CreateController::class, '__invoke'])->name('make.create');
        Route::post('/', [\App\Http\Controllers\Admin\Make\StoreController::class, '__invoke'])->name('make.store');
        Route::get('/{make}/edit', [\App\Http\Controllers\Admin\Make\EditController::class, '__invoke'])->name('make.edit');
        Route::get('/{make}', [\App\Http\Controllers\Admin\Make\ShowController::class, '__invoke'])->name('make.show');
        Route::patch('/{make}', [\App\Http\Controllers\Admin\Make\UpdateController::class, '__invoke'])->name('make.update');
        Route::delete('/{make}', [\App\Http\Controllers\Admin\Make\DeleteController::class, '__invoke'])->name('make.delete');
    });

    Route::group(['prefix' => 'models'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Model\IndexController::class, '__invoke'])->name('model.index');
        Route::get('/model', [\App\Http\Controllers\Admin\Model\CreateController::class, '__invoke'])->name('model.create');
        Route::post('/', [\App\Http\Controllers\Admin\Model\StoreController::class, '__invoke'])->name('model.store');
        Route::get('/{model}/edit', [\App\Http\Controllers\Admin\Model\EditController::class, '__invoke'])->name('model.edit');
        Route::get('/{model}', [\App\Http\Controllers\Admin\Model\ShowController::class, '__invoke'])->name('model.show');
        Route::patch('/{model}', [\App\Http\Controllers\Admin\Model\UpdateController::class, '__invoke'])->name('model.update');
        Route::delete('/{model}', [\App\Http\Controllers\Admin\Model\DeleteController::class, '__invoke'])->name('model.delete');
    });

    Route::group(['prefix' => 'cars'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Car\IndexController::class, '__invoke'])->name('car.index');
        Route::get('/car', [\App\Http\Controllers\Admin\Car\CreateController::class, '__invoke'])->name('car.create');
        Route::post('/', [\App\Http\Controllers\Admin\Car\StoreController::class, '__invoke'])->name('car.store');
        Route::get('/{car}/edit', [\App\Http\Controllers\Admin\Car\EditController::class, '__invoke'])->name('car.edit');
        Route::get('/{car}', [\App\Http\Controllers\Admin\Car\ShowController::class, '__invoke'])->name('car.show');
        Route::patch('/{car}', [\App\Http\Controllers\Admin\Car\UpdateController::class, '__invoke'])->name('car.update');
        Route::delete('/{car}', [\App\Http\Controllers\Admin\Car\DeleteController::class, '__invoke'])->name('car.delete');
    });

    Route::group(['prefix' => 'manufacturers'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Manufacturer\IndexController::class, '__invoke'])->name('manufacturer.index');
        Route::get('/manufacturer', [\App\Http\Controllers\Admin\Manufacturer\CreateController::class, '__invoke'])->name('manufacturer.create');
        Route::post('/', [\App\Http\Controllers\Admin\Manufacturer\StoreController::class, '__invoke'])->name('manufacturer.store');
        Route::get('/{manufacturer}/edit', [\App\Http\Controllers\Admin\Manufacturer\EditController::class, '__invoke'])->name('manufacturer.edit');
        Route::get('/{manufacturer}', [\App\Http\Controllers\Admin\Manufacturer\ShowController::class, '__invoke'])->name('manufacturer.show');
        Route::patch('/{manufacturer}', [\App\Http\Controllers\Admin\Manufacturer\UpdateController::class, '__invoke'])->name('manufacturer.update');
        Route::delete('/{manufacturer}', [\App\Http\Controllers\Admin\Manufacturer\DeleteController::class, '__invoke'])->name('manufacturer.delete');
    });

    Route::group(['prefix' => 'parts'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Part\IndexController::class, '__invoke'])->name('part.index');
        Route::get('/part', [\App\Http\Controllers\Admin\Part\CreateController::class, '__invoke'])->name('part.create');
        Route::post('/', [\App\Http\Controllers\Admin\Part\StoreController::class, '__invoke'])->name('part.store');
        Route::get('/{part}/edit', [\App\Http\Controllers\Admin\Part\EditController::class, '__invoke'])->name('part.edit');
        Route::get('/{part}', [\App\Http\Controllers\Admin\Part\ShowController::class, '__invoke'])->name('part.show');
        Route::patch('/{part}', [\App\Http\Controllers\Admin\Part\UpdateController::class, '__invoke'])->name('part.update');
        Route::delete('/{part}', [\App\Http\Controllers\Admin\Part\DeleteController::class, '__invoke'])->name('part.delete');
    });
});

Auth::routes();
