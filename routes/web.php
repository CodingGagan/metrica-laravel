<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CustomerController;

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
    return view('pages/index');
});

//Auth Routes
Route::get('login', function () {
    return view('auth/login');
});

Route::get('register', function () {
    return view('auth/register');
});

Route::post('register_user', [AuthController::class, 'register_user']);
Route::post('login_user', [AuthController::class, 'login_user']);
Route::get('logout', [AuthController::class, 'logout']);

//Packages Routes
Route::name('packages')->group(function () {

    Route::get('package_view', function () {
        return view('packages/add_package');
    });
    Route::get('package_list', [PackageController::class, 'packages_list']);
    Route::post('add_package', [PackageController::class, 'add_package']);
    Route::get('edit_view/{id}', [PackageController::class, 'edit_view']);
    Route::post('edit_package/{id}', [PackageController::class, 'edit_package']);
    Route::get('delete_package/{id}', [PackageController::class, 'delete_package']);
});

//Customers Routes
Route::name('customers')->group(function () {
    Route::get('customer', function () {
        return view('customers/index');
    });

    Route::get('customer_view', [CustomerController::class, 'customer_view']);
    Route::post('add_customer', [CustomerController::class, 'add_customer']);
});
