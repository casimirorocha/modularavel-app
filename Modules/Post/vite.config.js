import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: '../../public/build-post',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-post',
            input: [
                './resources/assets/sass/app.scss',
                './resources/assets/js/app.js'
            ],
            refresh: true,
        }),
    ],
});

export const paths = [
    'Modules/Post/resources/assets/sass/app.scss',
    'Modules/Post/resources/assets/js/app.js',
];
