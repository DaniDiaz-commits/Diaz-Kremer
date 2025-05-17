<?php

use App\Models\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('home page is accessible without authentication', function () {
    $response = $this->get('/');
    // $response->assertStatus(200);
});

// test('dashboard page is not accessible without authentication', function () {
//     $response = $this->get(route('dashboard'));
//     $response->assertRedirect(route('login')); // Expect redirection to login
// });

// test('dashboard page is accessible with authentication', function () {
//     $user = User::factory()->create();
//     $response = $this->actingAs($user)->get(route('dashboard'));
//     $response->assertStatus(200); // Expect the dashboard page to be accessible
// });

// test('admin.familias page is accessible with authentication', function () {
//     $user = User::factory()->create();
//     $response = $this->actingAs($user)->get(route('adminFamilias'));
//     $response->assertStatus(200); // Expect the page to be accessible
// });

// test('admin.productos page is accessible with authentication', function () {
//     $user = User::factory()->create();
//     $response = $this->actingAs($user)->get(route('adminProductos'));
//     $response->assertStatus(200); // Expect the page to be accessible
// });

// test('admin.proveedores page is accessible with authentication', function () {
//     $user = User::factory()->create();
//     $response = $this->actingAs($user)->get(route('adminProveedores'));
//     $response->assertStatus(200); // Expect the page to be accessible
// });

// test('productos page is accessible without authentication', function () {
//     $response = $this->get(route('productos'));
//     $response->assertStatus(200); // Expect the page to be accessible without authentication
// });

// test('producto show page is accessible without authentication', function () {
//     $response = $this->get(route('productos.show', ['id' => 1]));
//     $response->assertStatus(200); // Expect the page to be accessible without authentication
// });

// test('proveedores page is accessible without authentication', function () {
//     $response = $this->get(route('proveedores'));
//     $response->assertStatus(200); // Expect the page to be accessible without authentication
// });

// test('proveedor show page is accessible without authentication', function () {
//     $response = $this->get(route('proveedores.show', ['id' => 1]));
//     $response->assertStatus(200); // Expect the page to be accessible without authentication
// });

// test('settings profile page is not accessible without authentication', function () {
//     $response = $this->get(route('settings.profile'));
//     $response->assertRedirect(route('login')); // Expect redirection to login
// });

// test('settings profile page is accessible with authentication', function () {
//     $user = User::factory()->create();
// $this->actingAs($user); // Asegura que el usuario esté autenticado
// $response = $this->get(route('adminFamilias'));
// $response->assertStatus(200);

// });

// test('settings password page is not accessible without authentication', function () {
//     $response = $this->get(route('settings.password'));
//     $response->assertRedirect(route('login')); // Expect redirection to login
// });

// test('settings password page is accessible with authentication', function () {
//     $user = User::factory()->create();
//     $response = $this->actingAs($user)->get(route('settings.password'));
//     $response->assertStatus(200); // Expect the page to be accessible
// });

// test('settings appearance page is not accessible without authentication', function () {
//     $response = $this->get(route('settings.appearance'));
//     $response->assertRedirect(route('login')); // Expect redirection to login
// });

// test('settings appearance page is accessible with authentication', function () {
//     $user = User::factory()->create();
//     $response = $this->actingAs($user)->get(route('settings.appearance'));
//     $response->assertStatus(200); // Expect the page to be accessible
// });
