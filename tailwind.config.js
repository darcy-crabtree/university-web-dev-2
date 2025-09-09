
import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config}*/
module.exports = {
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
                mono: ['Andale Mono','FreeMono','monospace', ...defaultTheme.fontFamily.mono],
            },
        },
        screens: {
            'phone': '0px',
            'tablet': '640px',
            'laptop': '1024px',
            'desktop': '1280px'
        },
        colors: {
            'dark-grey': '#111111',
            'grey': '#333333',
            'light-grey': '#818181',
            'white': '#ffffff',
            'light-blue': '#DCF0F3',
            'blue-link': '#2563eb',
            
        },
    },
    plugins: [],
};



// /** @type {import('tailwindcss').Config} */
// module.exports = {
//     content: ["./index.blade.php",
//         "./about.blade.php",
//         "./create.blade.php",
//         "./edit.blade.php",
//         "./show.blade.php",
//         "./layout.blade.php"
//     ],
//     theme: {
//         extend: {},
//     },
//     plugins: [],
// };
// /** @type {import('tailwindcss').Config}*/
// export default {
