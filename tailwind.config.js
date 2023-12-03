import preset from './vendor/filament/support/tailwind.config.preset'
/** @type {import('tailwindcss').Config} */
export default {
  darkMode:'class',
  presets:[preset],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './app/Filament/**/*.php',
    './resources/views/filament/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
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

