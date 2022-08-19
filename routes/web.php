<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProducerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/index', [ProductController::class, 'loadProduct']);



Route::get('list', [ProductController::class, 'index']);

Route::get('add', [ProductController::class, 'add']);

Route::post('save', [ProductController::class, 'save']);

Route::get('edit/{id}', [ProductController::class, 'edit']);

Route::post('update', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'delete']);

Route::get('home2', function () {
    return view('home2');
});

Route::post('logout', function () {
    Auth::logout();
});

Route::get('/producers', [ProducerController::class, 'getProducers']);
Route::get('/producers/add', [ProducerController::class, 'add']);
Route::get('/producers/edit/{id}', [ProducerController::class, 'edit']);
Route::post('/producers/save', [ProducerController::class, 'save']);
Route::post('/producers/update', [ProducerController::class, 'update']);
Route::get('/producers/delete/{id}', [ProducerController::class, 'delete']);



require __DIR__ . '/auth.php';

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('home1');
    })->middleware(['auth'])->name('dashboard');
});


Route::get('product/msi', function () {
    return view('home.listproducts.msi');
});
