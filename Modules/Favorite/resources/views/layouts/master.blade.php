@pushonce('styles')
    @vite([
        'Modules/Favorite/resources/assets/sass/app.scss',
        'Modules/Favorite/resources/assets/js/app.js'
    ])
@endpushonce

<x-layouts.app>
    @yield('content')
</x-layouts.app>
