import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export const paths = [
    'Modules/Auth/resources/assets/css/app.css',
    'Modules/Auth/resources/assets/js/app.js',
];

export default defineConfig({
    plugins: [
        laravel({
            input: paths,
            refresh: true
        })
    ]
});
