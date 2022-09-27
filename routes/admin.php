<?php

use App\Http\Controllers\Admin\{
    CategoryController,
    DashboardController
};
use Illuminate\Support\Facades\Route;

Route::get('', [DashboardController::class, 'index'])->name('admin.index');

Route::resource('categorias', CategoryController::class )->names('admin.categories');