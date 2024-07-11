<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('clients.index');
});

Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/table', [AdminController::class, 'table']);
Route::get('admin/create', [AdminController::class, 'create']);
Route::get('admin/details', [AdminController::class, 'details']);
