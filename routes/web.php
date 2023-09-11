<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerRegistrationController;

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
Route::get('/customer-registration', [CustomerRegistrationController::class, 'addUserForm']);
Route::post('/customer-registration', [CustomerRegistrationController::class, 'registerUser']);
