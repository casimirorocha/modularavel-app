@extends('components.layouts.app')

@pushonce('styles')
	@vite([
		'Modules/Friends/resources/assets/sass/app.scss',
		'Modules/Friends/resources/assets/js/app.js'
	])
@endpushonce
