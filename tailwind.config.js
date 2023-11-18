/** @type {import('tailwindcss').Config} */
export default {
  darkMode:'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'green-main':'#164138'
      }
    },
  },
  plugins: [
  ],
  
}

