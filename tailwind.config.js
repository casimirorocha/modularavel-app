import defaultTheme from 'tailwindcss/defaultTheme';

import tw_elements from "tw-elements/plugin.cjs";

import colorsTheme from "tailwindcss/colors";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./Modules/*/resources/**/*.{js,ts,blade.php}",
        './resources/**/*.{js,ts,blade.php}',
        "./node_modules/tw-elements/js/**/*.js",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
    ],
    theme: {
        extend: {
            colors: {
                ...colorsTheme,
                success: colorsTheme.green,
                gray: colorsTheme.slate
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    // darkMode: "class",
    plugins: [
        tw_elements
    ],
};
