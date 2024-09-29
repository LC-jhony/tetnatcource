<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\HomeLandlord;
use App\Livewire\HomeTenant;
use App\Livewire\Products;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('landlord/home', HomeLandlord::class)->name('landlord.home');
Route::get('tenant/home', HomeTenant::class)->name('tenant.home');
Route::get('tenant/products', Products::class)->name('tenant.products');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
