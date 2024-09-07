import defaultTheme from 'tailwindcss/defaultTheme';

const colorsTheme = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.{css,js,ts,blade.php}",
        "./Modules/*/resources/**/*.{css,js,ts,blade.php}",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.{js,jsx,ts,tsx,css,sass,scss,vue,blade.php}',
        "./node_modules/tw-elements/js/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                gray: colorsTheme.neutral
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    darkMode: "class",
    plugins: [
        require("tw-elements/plugin.cjs")
    ],
};
