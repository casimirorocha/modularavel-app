import defaultTheme from 'tailwindcss/defaultTheme';

import tw_elements from "tw-elements/plugin.cjs";

import colorsTheme from "tailwindcss/colors";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./Modules/**/resources/**/*.{css,scss,sass,js,ts,blade.php}",
        './resources/**/*.{css,sass,scss,js,ts,blade.php}',
        "./node_modules/tw-elements/js/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                success: {
                    ...colorsTheme.green
                },
                gray: {
                    ...colorsTheme.slate
                }
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
