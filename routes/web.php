<?php

use HRTime\PerformanceCounter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
Route::get('/permissions/list', [PermissionController::class, 'index'])->name('permissions.index');
Route::post('/permissions/store', [PermissionController::class, 'store'])->name('permissions.store');
Route::get('/permissions/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
Route::post('/permissions/update', [PermissionController::class, 'update'])->name('permissions.update');
Route::get('/permissions/delete', [PermissionController::class, 'destroy'])->name('permissions.destroy');
