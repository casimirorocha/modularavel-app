<?php

use Illuminate\Support\Facades\Session;

use function Livewire\Volt\{layout, state};

state([
	'name' => '',
	'email' => '',
	'password' => '',
	'password_confirmation' => ''
]);

$login = function () {
	$this->validate();

	$this->form->authenticate();

	Session::regenerate();

	$this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
};

?>


<x-guest-layout>
	<x-core::ui.login-form-2/>
</x-guest-layout>
