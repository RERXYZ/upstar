/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode : 'class',
  theme: {
    extend: {
      fontFamily: {
        quicksand: ['Quicksand'],
        lemon: ['Lemon'],
        funkymore: ['Funkymore'],
        poppins: ['Poppins'],
        japanese: ['Japanese 3017'],
        absoluteXero: ['Absolute Xero'],
        bigmacca: ['bigmacca']
      },
      screens: {
        'xs': '550px', // Menambahkan breakpoint baru di bawah sm
        'xss': '450px', 
      },
    },
  },
  plugins: [
    require('@tailwindcss/container-queries'),
  ],
}