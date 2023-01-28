<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Manage User
Route::get('/all-user', [App\Http\Controllers\admin\UserController::class, 'AllUser'])->name('alluser');
Route::get('/add-user', [App\Http\Controllers\admin\UserController::class, 'AddUser'])->name('adduser');
Route::post('/inuser', [App\Http\Controllers\admin\UserController::class, 'InUser'])->name('inuser');
Route::get('/edit-user/{id}', [App\Http\Controllers\admin\UserController::class, 'EditUser'])->name('edituser');
Route::post('/upuser/{id}', [App\Http\Controllers\admin\UserController::class, 'UpdateUser'])->name('upuser');
Route::get('/reset-password/{id}', [App\Http\Controllers\admin\UserController::class, 'ResetPassword'])->name('resetpassword');
Route::post('/respass/{id}', [App\Http\Controllers\admin\UserController::class, 'ResPass'])->name('respass');
Route::get('/delete-user/{id}', [App\Http\Controllers\admin\UserController::class, 'DeleteUser'])->name('deleteuser');

//Manage Bangunan
Route::get('/all-bangunan', [App\Http\Controllers\admin\BangunanController::class, 'AllBangunan'])->name('allbangunan');
Route::get('/add-bangunan', [App\Http\Controllers\admin\BangunanController::class, 'AddBangunan'])->name('addbangunan');
Route::post('/inbangunan', [App\Http\Controllers\admin\BangunanController::class, 'InBangunan'])->name('inbangunan');
Route::get('/edit-bangunan/{id}', [App\Http\Controllers\admin\BangunanController::class, 'EditBangunan'])->name('editbangunan');
Route::post('/upbangunan/{id}', [App\Http\Controllers\admin\BangunanController::class, 'UpdateBangunan'])->name('upbangunan');
Route::get('/delete-bangunan/{id}', [App\Http\Controllers\admin\BangunanController::class, 'DeleteBangunan'])->name('deletebangunan');

//Manage Ruangan
Route::get('/all-ruangan', [App\Http\Controllers\admin\RuanganController::class, 'AllRuangan'])->name('allruangan');
Route::get('/add-ruangan', [App\Http\Controllers\admin\RuanganController::class, 'AddRuangan'])->name('addruangan');
Route::post('/inruangan', [App\Http\Controllers\admin\RuanganController::class, 'InRuangan'])->name('inruangann');
Route::get('/edit-ruangan/{id}', [App\Http\Controllers\admin\RuanganController::class, 'EditRuangan'])->name('editruangan');
Route::post('/upruangan/{id}', [App\Http\Controllers\admin\RuanganController::class, 'UpdateRuangan'])->name('upruangan');
Route::get('/delete-ruangan/{id}', [App\Http\Controllers\admin\RuanganController::class, 'DeleteRuangan'])->name('deleteruangan');