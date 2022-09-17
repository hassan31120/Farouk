<?php

use App\Http\Controllers\Admin\ConnectionController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin'], function () {
    // Users
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users');
    Route::get('/user/create', [UsersController::class, 'create'])->name('admin.user.create');
    Route::post('/user/store', [UsersController::class, 'store'])->name('admin.user.store');
    Route::get('/user/edit/{id}', [UsersController::class, 'edit'])->name('admin.user.edit');
    Route::post('/user/update/{id}', [UsersController::class, 'update'])->name('admin.user.update');
    Route::get('/user/destroy/{id}', [UsersController::class, 'destroy'])->name('admin.user.destroy');

    // Admins
    Route::get('/admins', [UsersController::class, 'Adminindex'])->name('admin.admins');
    Route::get('/admin/create', [UsersController::class, 'Admincreate'])->name('admin.admin.create');
    Route::post('/admin/store', [UsersController::class, 'Adminstore'])->name('admin.admin.store');
    Route::get('/admin/edit/{id}', [UsersController::class, 'Adminedit'])->name('admin.admin.edit');
    Route::post('/admin/update/{id}', [UsersController::class, 'Adminupdate'])->name('admin.admin.update');
    Route::get('/admin/destroy/{id}', [UsersController::class, 'Admindestroy'])->name('admin.admin.destroy');

    // Contacts
    Route::get('/contacts', [ContactsController::class, 'index'])->name('admin.contacts');
    Route::get('/contact/edit/{id}', [ContactsController::class, 'edit'])->name('admin.contact.edit');
    Route::post('/contact/update/{id}', [ContactsController::class, 'update'])->name('admin.contact.update');

    // Settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
    Route::get('/setting/edit/{id}', [SettingsController::class, 'edit'])->name('admin.setting.edit');
    Route::post('/setting/update/{id}', [SettingsController::class, 'update'])->name('admin.setting.update');

    // Connections
    Route::get('/connections', [ConnectionController::class, 'index'])->name('admin.connections');
    Route::get('/admin/connection/{id}', [ConnectionController::class, 'destroy'])->name('admin.connection.destroy');
});

