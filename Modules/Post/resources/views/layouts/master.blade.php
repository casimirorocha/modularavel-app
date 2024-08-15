@extends('components.layouts.app')

@push('styles')
    @vite([
        'Modules/Post/resources/assets/sass/app.scss',
        'Modules/Post/resources/assets/js/app.js'
    ])
@endpush
