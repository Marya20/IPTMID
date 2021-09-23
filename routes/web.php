<?php
use App\Http\Controllers\AuthenticationController;
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

Route::get('/',[AuthenticationController::class, 'home']);
Route::get('/register',[AuthenticationController::class, 'registrationf']);
Route::post('/register',[AuthenticationController::class, 'register']);
Route::get('/login',[AuthenticationController::class, 'loginf'])->name('login');
Route::post('/login',[AuthenticationController::class, 'login']);
Route::get('/verification/{user}/{token}',[AuthenticationController::class, 'verification']);
Route::get('/profile', [AuthenticationController::class, 'profile'])->middleware('auth');

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth');




