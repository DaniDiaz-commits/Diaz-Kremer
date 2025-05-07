<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', HomeController::class)->name('home');
// Route::get('/', HomeController::class)->name('welcome');

Route::get('admin.dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::view('admin.posts', 'posts')->middleware(['auth', 'verified'])->name('posts');

Route::view('admin.familias', 'AdminFamilias')->middleware(['auth', 'verified'])->name('adminFamilias');

Route::view('admin.productos', 'AdminProductos')->middleware(['auth', 'verified'])->name('adminProductos');

Route::get('/productos',  [ProductoController::class, 'index'])->name('productos');
Route::get('/productos/filtrar', [ProductoController::class, 'order'])->name('productos.order');

Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('productos.show');

Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores');
Route::get('/proveedor/{id}', [ProveedorController::class, 'show'])->name('proveedores.show');

Route::get('/cookies', function () { return view('cookies'); });

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
