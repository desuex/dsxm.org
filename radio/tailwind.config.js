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
            purple: {
                DEFAULT: '#8F63AE'
            },
            blue: {
                DEFAULT: '#3490DC'
            },
            red: {
                DEFAULT: '#E53E3E'
            },
            orange: {
                DEFAULT:  '#F97316'
            },
            cyan: {
                DEFAULT: '#00B4B6'
            },
            pink: {
                DEFAULT: '#FF66FF'
            },
            yellow: {
                DEFAULT: '#FCD34D'
            },
            // Add more custom colors if needed
        }
    },
  },
  plugins: [],
}

