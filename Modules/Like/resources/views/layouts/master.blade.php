@extends('components.layouts.app')

@pushonce('styles')
    @vite([
        'Modules/Like/resources/assets/sass/app.scss',
        'Modules/Like/resources/assets/js/app.js'
    ])
@endpushonce
