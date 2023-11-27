/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        // "./node_modules/flowbite/**/*.js"
        // "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                //Screen tab
                'tablet': '768px',          
                'max-tablet': {'max': '1159px'},
                
                //screen mobile
                'mobile': '608px',
                'max-mobile': {'max': '767px'},
              },
        },
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
        },
    },
    plugins: [
        // require('flowbite/plugin'),
        require('@tailwindcss/forms'),
    ],
};

