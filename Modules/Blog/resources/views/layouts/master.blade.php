@extends('components.layouts.app')

@pushonce('styles')
    @vite([
        'Modules/Blog/resources/assets/sass/app.scss',
        'Modules/Blog/resources/assets/js/app.js'
    ])
@endpushonce
