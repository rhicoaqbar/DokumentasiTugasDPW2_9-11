<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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
    return view('frontview.index');
});



Route::get('index', [HomeController::class, 'showindex']);
Route::get('detail', [HomeController::class, 'showdetail']);
Route::get('checkout', [HomeController::class, 'showcheckout']);
Route::get('login', [HomeController::class, 'showlogin']);
Route::get('shop', [HomeController::class, 'showshop']);


Route::get('colegan', [HomeController::class, 'showcolegan']);
Route::get('dashboard', [HomeController::class, 'showdashboard']);
Route::get('kategori', [HomeController::class, 'showkategori']);
Route::get('promo', [HomeController::class, 'showdetail']);
Route::get('registrasi', [AuthController::class, 'showregistrasi']);
Route::get('supplier', [HomeController::class, 'showsupplier']);
Route::get('user', [HomeController::class, 'showuser']);


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});


Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'Loginprocess']);
Route::get('logout', [AuthController::class, 'Logout']);


Route::get('test-collection', [HomeController::class, 'testCollection']);





Route::get('/template', function () {
    return view('template.base');
});
