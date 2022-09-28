<?php

use App\Http\Controllers\Admin\{
    CategoryController,
    DashboardController
};
use App\Http\Livewire\CategoryComponent;
use Illuminate\Support\Facades\Route;

Route::get('', [DashboardController::class, 'index'])->name('admin.index');

Route::resource('categorias', CategoryController::class )->names('admin.categories');

rOUTE::get('categoria', CategoryComponent::class);