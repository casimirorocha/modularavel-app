<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @livewireStyles

        @vite(['resources/css/app.css', 'resources/js/app.js', ...\Nwidart\Modules\Module::getAssets()])
    </head>
    <body>
        @if(isset($slot))
            {!! $slot !!}
        @else
            @yield('content')
        @endif

        @livewireScripts
    </body>
</html>
