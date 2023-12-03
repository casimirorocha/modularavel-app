/*import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: '../../public/build-favorite',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-favorite',
            input: [
                './resources/assets/sass/app.scss',
                './resources/assets/js/app.js'
            ],
            refresh: true,
        }),
    ],
});*/

export const paths = [
    'Modules/Favorite/resources/assets/sass/app.scss',
    'Modules/Favorite/resources/assets/js/app.js',
];
