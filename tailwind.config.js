/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
    extend: {
        colors: {
              "laracasts": "rgb(50,138,241)"
        }
    },
  },
  plugins: [],
}