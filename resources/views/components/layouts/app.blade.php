{{-- If remove this props, some components or pages got fatal error: undefined variable $attribute --}}
@props(['attributes'])
	<!DOCTYPE html>
<html
	lang="{{ str_replace('_', '-', app()->getLocale()) }}"

	{{ $attributes->merge(['class' => $theme ?? config('core.theme',  'auto')]) }}
>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>{{ $title ?? config('app.name', 'Page Title') }}</title>

	@stack('styles')

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-[sans-serif]">
<main>
	@if($slot?->isNotEmpty())
		{!! $slot !!}
	@else
		@yield('content')
	@endif
</main>
</body>
</html>
