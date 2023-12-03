@pushonce('styles')
    @vite([
        'Modules/Post/resources/assets/sass/app.scss',
        'Modules/Post/resources/assets/js/app.js'
    ])
@endpushonce

<x-layouts.app>
    @yield('content')
</x-layouts.app>
