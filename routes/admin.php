<?php

use App\Http\Controllers\Admin\{
    CategoryController,
    DasboardController
};
use App\Http\Livewire\Admin\CategoryComponent;
use Illuminate\Support\Facades\Route;


Route::get('', [DasboardController::class, 'index'])->name('dash.index');

Route::resource('categorias', CategoryController::class)->names('admin.categories');

//Route::get('categories', [CategoryComponent::class, 'rendersail']);