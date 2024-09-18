import {defineConfig} from 'vite';
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
                refresh: {
                    config: {
                        always: true,
                        log: true,
                    },
                    paths: ['./app/**', './config/**']
                },
            })
        ]
    });
}

export default getConfig();
