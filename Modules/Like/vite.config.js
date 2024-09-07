import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export const paths = [
    'Modules/Like/resources/assets/sass/app.scss',
    'Modules/Like/resources/assets/js/app.js'
];

export default defineConfig({
    plugins: [
        laravel({
            input: paths,
            refresh: true
        })
    ]
});
