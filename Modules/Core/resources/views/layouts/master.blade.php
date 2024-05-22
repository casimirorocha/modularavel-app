@pushonce('styles')
    @vite([
        'Modules/Core/resources/assets/sass/app.scss',
        'Modules/Core/resources/assets/js/app.js'
    ])
@endpushonce

<x-layouts.app>
    @yield('content')
</x-layouts.app>
