<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\TravelPackagesController;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\PesananController;

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
    return view('auth.login');
});

Auth::routes();

Route::middleware('auth')->group(function () {
Route::get('/sidebar', [SidebarController::class, 'showSidebar'])->name('sidebar');

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/permission', [App\Http\Controllers\PermissionController::class,'index'])->name('permission');
Route::resource('pesanan', PesananController::class);
Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'travel_packages'=> TravelPackagesController::class,
    'pesanan' => PesananController::class,
    'permissions' => PermissionController::class,
]);

});
