@pushonce('styles')
    @vite([
        'Modules/Auth/resources/assets/sass/app.scss',
        'Modules/Auth/resources/assets/js/app.js'
    ])
@endpushonce

<x-layouts.app>
    @yield('content')
</x-layouts.app>
