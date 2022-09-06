<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/add', function () {
    return view('admin-views/client/index');
})->name('add');
Route::get('/list', [ClientController::class, 'list'])->name('list');
Route::get('/addproject', [ProjectController::class, 'addproject'])->name('addproject');
Route::post('store', [ClientController::class, 'store'])->name('store');
Route::post('storeProject', [ProjectController::class, 'storeProject'])->name('storeProject');
Route::get('/listProjects', [ProjectController::class, 'listProjects'])->name('listProjects');
Route::get('editProject/{id}', [ProjectController::class, 'editProject'])->name('editProject');

