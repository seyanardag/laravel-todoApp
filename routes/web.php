<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'store']);
Route::post('/delete/{todo}', [TodoController::class, 'delete']);
Route::post('/switchDone/{todo}', [TodoController::class, 'switchDone']);

Route::view('/edit', 'editpage');
Route::get('/edit/{todo}', [TodoController::class, 'edit']);
Route::post('/edited/{todo}', [TodoController::class, 'edited']);

