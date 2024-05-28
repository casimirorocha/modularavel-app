<?php

use Modules\Profile\Models\Profile;

uses(Tests\TestCase::class);

test('can see profile list', function() {
    $this->authenticate();
   $this->get(route('app.profile.index'))->assertOk();
});

test('can see profile create page', function() {
    $this->authenticate();
   $this->get(route('app.profile.create'))->assertOk();
});

test('can create profile', function() {
    $this->authenticate();
   $this->post(route('app.profile.store', [
       'name' => 'Joe',
       'email' => 'joe@joe.com'
   ]))->assertRedirect(route('app.profile.index'));

   $this->assertDatabaseCount('profile', 1);
});

test('can see profile edit page', function() {
    $this->authenticate();
    $profile = Profile::factory()->create();
    $this->get(route('app.profile.edit', $profile->id))->assertOk();
});

test('can update profile', function() {
    $this->authenticate();
    $profile = Profile::factory()->create();
    $this->patch(route('app.profile.update', $profile->id), [
        'name' => 'Joe Smith',
       'email' => 'joe@joe.com'
    ])->assertRedirect(route('app.profile.index'));

    $this->assertDatabaseHas('profile', ['name' => 'Joe Smith']);
});

test('can delete profile', function() {
    $this->authenticate();
    $profile = Profile::factory()->create();
    $this->delete(route('app.profile.delete', $profile->id))->assertRedirect(route('app.profile.index'));

    $this->assertDatabaseCount('profile', 0);
});