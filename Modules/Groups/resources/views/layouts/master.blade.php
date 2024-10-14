@extends('components.layouts.app')

@pushonce('styles')
	@vite([
		'Modules/Groups/resources/assets/sass/app.scss',
		'Modules/Groups/resources/assets/js/app.js'
	])
@endpushonce
