import defaultTheme from 'tailwindcss/defaultTheme';

import tw_elements from "tw-elements/plugin.cjs";

import colorsTheme from "tailwindcss/colors";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./node_modules/tw-elements/js/**/*.js",
        "./Modules/*/resources/**/*.{css,scss,js,ts,blade.php}",
        './resources/**/*.{css,scss,js,ts,blade.php}',
    ],
    theme: {
        extend: {
            colors: {
                gray: colorsTheme.slate
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    darkMode: "class",
    plugins: [
        tw_elements
    ],
};
