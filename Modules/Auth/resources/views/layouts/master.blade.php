@extends('components.layouts.app')

@pushonce('styles')
	@vite([
			'Modules/Auth/resources/assets/sass/auth-module.scss',
			'Modules/Auth/resources/assets/js/auth-module.js'
	])
@endpushonce
