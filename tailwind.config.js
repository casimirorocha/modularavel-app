import defaultTheme from 'tailwindcss/defaultTheme';

import wireui from './vendor/wireui/wireui/tailwind.config.js'

/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        wireui
    ],
    content: [
        "./resources/**/*.{js,css,scss,sass,blade.php}",
        "./Modules/*/resources/**/*.{js,css,scss,sass,blade.php}",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./vendor/wireui/wireui/src/*.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/WireUi/**/*.php",
        "./vendor/wireui/wireui/src/Components/**/*.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [],
};
