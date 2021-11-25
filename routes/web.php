<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


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

Route::get('pruebas', 'ProductController@index')->name('products.index');
Route::get('thankyou', 'ProductController@thankyou')->name('thankyou');


Route::get('create-step-one', 'ProductController@createStepOne')->name('products.create.step.one');
Route::post('create-step-one', 'ProductController@postCreateStepOne')->name('products.create.step.one.post');

Route::get('create-step-two', 'ProductController@createStepTwo')->name('products.create.step.two');
Route::post('create-step-two', 'ProductController@postCreateStepTwo')->name('products.create.step.two.post');

Route::get('create-step-three', 'ProductController@createStepThree')->name('products.create.step.three');
Route::post('create-step-three', 'ProductController@postCreateStepThree')->name('products.create.step.three.post');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
/*Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');*/
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('dashboard/{id}', [AuthController::class, 'dashboardid']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


/*Route::get('registration', [AuthController::class, 'registration'])->name('register');*/
/*Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');*/