<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerRegistrationController;
use App\Http\Controllers\EmployeeController;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function () {
        return view('about-us');
});
Route::get('/customer/register', [CustomerRegistrationController::class, 'addUserForm'])->name('customer.register');
Route::post('/customer/register', [CustomerRegistrationController::class, 'registerUser']);

Route::get('/customer', [CustomerController::class, 'index']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer/view', [CustomerController::class, 'view']);

Route::get('/employee/dashboard', [EmployeeController::class, 'dashboard'])->name('employee.dashboard');
Route::get('/employee/add-user', [EmployeeController::class, 'view'])->name('employee.view-user');
Route::post('/employee/add-user', [EmployeeController::class, 'store'])->name('employee.add-user');
