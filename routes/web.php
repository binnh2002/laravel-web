<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function (){
    return view('welcome');
});

Route::get('test',function (){
    return view('home1');
});

Route::get('list', [ProductController::class, 'index']);

Route::get('add', [ProductController::class, 'add']);

Route::post('save', [ProductController::class, 'save']);

Route::get('edit/{id}', [ProductController::class, 'edit']);

Route::post('update', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'delete']);

Route::post('logout', function(){
    Auth::logout();
 });



require __DIR__.'/auth.php';

Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
});
