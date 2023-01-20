<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [ProductController::class, 'index']);

Route::get('/products/{product:slug}', [ProductController::class, 'show']);

Route::get('/categories/{category:slug}', [ProductController::class, 'showCategories']);

Route::get('/sellers/{seller:name}', [ProductController::class, 'showSeller']);

Route::get('/register', [RegistrationController::class, 'create'])->middleware('guest');
Route::post('/register', [RegistrationController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', [ProductController::class, 'showProduct']);

Route::get('/dashboard/edit/{product:slug}', [ProductController::class, 'edit']);

Route::post('/dashboard/edit', [ProductController::class, 'update']);
Route::get('/dashboard/delete', [ProductController::class, 'delete']);

Route::get('/dashboard/add', [ProductController::class, 'add']);
Route::get('/dashboard/store', [ProductController::class, 'store']);