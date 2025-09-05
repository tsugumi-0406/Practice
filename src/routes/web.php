<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PractieController;

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
Route::get('/', [PractieController::class, 'index']);
Route::get('/confirm', [PractieController::class, 'confirm']);
Route::get('/thanks', [PractieController::class, 'thanks']);
Route::get('/admin', [PractieController::class, 'admin']);
Route::get('/register', [PractieController::class, 'register']);
Route::get('/login', [PractieController::class, 'login']);

