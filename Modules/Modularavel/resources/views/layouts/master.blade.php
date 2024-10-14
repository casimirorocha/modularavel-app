@extends('components.layouts.app')

@pushonce('styles')
	@vite([
		'Modules/Modularavel/resources/assets/sass/app.scss',
		'Modules/Modularavel/resources/assets/js/app.js'
	])
@endpushonce
