<?php

use Modules\UserMedia\Models\UserMedia;

uses(Tests\TestCase::class);

test('can see usermedia list', function() {
    $this->authenticate();
   $this->get(route('app.usermedia.index'))->assertOk();
});

test('can see usermedia create page', function() {
    $this->authenticate();
   $this->get(route('app.usermedia.create'))->assertOk();
});

test('can create usermedia', function() {
    $this->authenticate();
   $this->post(route('app.usermedia.store', [
       'name' => 'Joe',
       'email' => 'joe@joe.com'
   ]))->assertRedirect(route('app.usermedia.index'));

   $this->assertDatabaseCount('usermedia', 1);
});

test('can see usermedia edit page', function() {
    $this->authenticate();
    $usermedia = UserMedia::factory()->create();
    $this->get(route('app.usermedia.edit', $usermedia->id))->assertOk();
});

test('can update usermedia', function() {
    $this->authenticate();
    $usermedia = UserMedia::factory()->create();
    $this->patch(route('app.usermedia.update', $usermedia->id), [
        'name' => 'Joe Smith',
       'email' => 'joe@joe.com'
    ])->assertRedirect(route('app.usermedia.index'));

    $this->assertDatabaseHas('usermedia', ['name' => 'Joe Smith']);
});

test('can delete usermedia', function() {
    $this->authenticate();
    $usermedia = UserMedia::factory()->create();
    $this->delete(route('app.usermedia.delete', $usermedia->id))->assertRedirect(route('app.usermedia.index'));

    $this->assertDatabaseCount('user_media', 0);
});