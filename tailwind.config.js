/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        lilac: '#D8BFD8',
        gold: '#B2AC88',
        silver: '#D3D3D3',
        copper: '#F7E7CE',
      },
    },
  },
  plugins: [],
}
