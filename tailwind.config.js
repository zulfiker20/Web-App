import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                'gradient-x': {
                    '0%, 100%': { 'background-position': '0% 50%' },
                    '50%': { 'background-position': '100% 50%' },
                },
                'gradient-y': {
                    '0%, 100%': { 'background-position': '50% 0%' },
                    '50%': { 'background-position': '50% 100%' },
                },
            },
            animation: {
                'gradient-x': 'gradient-x 6s ease infinite',
                'gradient-y': 'gradient-y 8s ease infinite',
            },
        },
    },

    plugins: [forms],
};
