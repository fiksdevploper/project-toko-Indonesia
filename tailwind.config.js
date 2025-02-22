import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
                display: ['Clash Display', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                biru: '#4163CF',
                putih: '#F4FDF7',
                birumuda: '#708DEF',
                hitammuda: '#272638',
                hitam: '#1E1C29',
                hitamsoft: '#35374E',
                unggumuda: '#645CBD',
                orenmuda: '#F1ABA8',
            },
            
        },
    },
    plugins: [
        require('tailwind-scrollbar'),
    ],
};
