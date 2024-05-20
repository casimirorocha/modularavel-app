<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <wireui:scripts/>

        @vite(['resources/**/*.{css,js}', ...\Nwidart\Modules\Module::getAssets()])
    </head>
    <body>
        @if(isset($slot))
            {!! $slot !!}
        @else
            @yield('content')
        @endif
    </body>
</html>
