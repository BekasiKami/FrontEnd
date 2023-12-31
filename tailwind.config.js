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
                'max-tablet': {'max': '1025px'},
                
                //screen mobile
                'mobile': {'max': '431px'},
                'max-mobile': {'max': '767px'},

                //Desktop
                'min-desktop': '1160px',

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

