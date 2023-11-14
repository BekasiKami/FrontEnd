/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        // "./node_modules/flowbite/**/*.js"
        // "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
        },
    },
    plugins: [
        // require('flowbite/plugin'),
        require('@tailwindcss/forms'),
    ],
};
