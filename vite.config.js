import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import collectModuleAssetsPaths from './vite-module-loader.cjs';

async function getConfig() {
    const paths = [
        'resources/css/app.css',
        'resources/js/app.js',
    ];

    const allPaths = await collectModuleAssetsPaths(paths, './Modules');

    return defineConfig({
        plugins: [
            laravel({
                input: allPaths,
                // refresh: true
                refresh: ['./Modules/**', './app/**', './config/**'],
            })
        ]
    });
}

export default getConfig();
