@extends('components.layouts.app')

@pushonce('styles')
    @vite([
        'Modules/Auth/resources/assets/sass/app.scss',
        'Modules/Auth/resources/assets/js/app.js'
    ])
@endpushonce
