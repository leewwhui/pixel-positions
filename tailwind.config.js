/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                black: '#060606'
            },
            fontSize: {
               xxs: '0.625rem'
            }
        },
    },
    plugins: [],
}
