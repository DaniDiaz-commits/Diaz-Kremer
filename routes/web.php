<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProveedorController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
// Route::get('/', HomeController::class)->name('welcome');

Route::view('admin.dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('admin.posts', 'posts')
    ->middleware(['auth', 'verified'])
    ->name('posts');

Route::view('admin.familias', 'familias')
    ->middleware(['auth', 'verified'])
    ->name('familias');

Route::view('admin.productos', 'productos')
    ->middleware(['auth', 'verified'])
    ->name('productos');

Route::get('/proveedores', ProveedorController::class);
Route::get('/cookies', function () {
    return view('cookies');
});


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
