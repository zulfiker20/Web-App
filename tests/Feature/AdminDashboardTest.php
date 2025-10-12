<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('allows an authenticated user to view the admin dashboard', function () {
    // create a user
    $user = User::factory()->create();

    // act as the user and visit the admin dashboard
    $response = $this->actingAs($user)->get('/admin/dashboard');

    $response->assertStatus(200);
});
