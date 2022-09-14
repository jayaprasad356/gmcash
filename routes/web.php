<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StaffController;
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
 
//client
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/add', function () {
    return view('admin-views/client/index');
})->name('add');
Route::post('store', [ClientController::class, 'store'])->name('store');
Route::get('/list', [ClientController::class, 'list'])->name('list');
Route::get('editClient/{id}', [ClientController::class, 'editClient'])->name('editClient');
Route::post('updateClient/{id}', [ClientController::class, 'updateClient'])->name('updateClient');
Route::get('destroyClient/{id}', [ClientController::class, 'destroyClient'])->name('destroyClient');


//project 
Route::get('/addproject', [ProjectController::class, 'addproject'])->name('addproject');
Route::post('storeProject', [ProjectController::class, 'storeProject'])->name('storeProject');
Route::get('/listProjects', [ProjectController::class, 'listProjects'])->name('listProjects');
Route::get('editProject/{id}', [ProjectController::class, 'editProject'])->name('editProject');
Route::post('updateProject/{id}', [ProjectController::class, 'updateProject'])->name('updateProject');
Route::get('destroyProject/{id}', [ProjectController::class, 'destroyProject'])->name('destroyProject');


//staffs
Route::get('/addstaff', [StaffController::class, 'addstaff'])->name('addstaff');
Route::post('storeStaff', [StaffController::class, 'storeStaff'])->name('storeStaff');
Route::get('/listStaffs', [StaffController::class, 'listStaffs'])->name('listStaffs');
Route::get('editStaff/{id}', [StaffController::class, 'editStaff'])->name('editStaff');
Route::post('updateStaff/{id}', [StaffController::class, 'updateStaff'])->name('updateStaff');
Route::get('destroyStaff/{id}', [StaffController::class, 'destroyStaff'])->name('destroyStaff');



