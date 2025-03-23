<?php

use App\Models\User;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

// test('guests are redirected to the login page', function () {
//     $this->get('/dashboard')->assertRedirect('/login');
// });

test('Los usuarios logueados pueden entrar al dashboard', function () {
    $this->actingAs($user = User::factory()->create());

    $this->get('/admin.dashboard')->assertStatus(200);
});