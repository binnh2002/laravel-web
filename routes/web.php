<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ProductController::class, 'loadProduct']);




Route::get('list', [ProductController::class, 'index']);

Route::get('add', [ProductController::class, 'add']);

Route::post('save', [ProductController::class, 'save']);

Route::get('edit/{id}', [ProductController::class, 'edit']);

Route::post('update', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'delete']);



Route::get('/producers', [ProducerController::class, 'get_producers']);
Route::get('/producers/add', [ProducerController::class, 'add']);
Route::get('/producers/edit/{id}', [ProducerController::class, 'edit']);
Route::post('/producers/save', [ProducerController::class, 'save']);
Route::post('/producers/update', [ProducerController::class, 'update']);
Route::get('/producers/delete/{id}', [ProducerController::class, 'delete']);


Route::get('/categories', [CategoryController::class, 'get_category']);
Route::get('/categories/add', [CategoryController::class, 'add']);
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/categories/save', [CategoryController::class, 'save']);
Route::post('/categories/update', [CategoryController::class, 'update']);
Route::get('/categories/delete/{id}', [CategoryController::class, 'delete']);

Route::get('/users', [UserController::class, 'customer']);
Route::get('/users/delete/{id}', [UserController::class, 'delete']);



require __DIR__ . '/auth.php';

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', function () {
        return view('home1');
    })->middleware(['auth'])->name('dashboard');
});


Route::get('product/msi', function () {
    return view('home.listproducts.msi');
});


// Route::middleware('auth')->group(function () {
//     Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
//         ->name('verification.notice');

//     Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
//         ->middleware(['signed', 'throttle:6,1'])
//         ->name('verification.verify');

//     Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
//         ->middleware('throttle:6,1')
//         ->name('verification.send');

//     Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
//         ->name('password.confirm');

//     Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

//     Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
//         ->name('logout');
// });
