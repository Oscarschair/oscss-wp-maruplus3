/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Inter"', '"Noto Sans JP"', 'sans-serif'],
      },
      colors: {
        lilac: '#D8BFD8',
        gold: '#B2AC88',
        silver: '#D3D3D3',
        copper: '#F7E7CE',
        brand: {
          50: '#FDFBFE',
          100: '#F6EEF6',
          200: '#EBE0EB',
          300: '#DECDE0',
          400: '#D1BBD3',
          500: '#C2A7C3',
          600: '#A184A3',
          700: '#8A6E8C',
          800: '#6E5670',
          900: '#544057',
          950: '#3D2D3F',
        },
      },
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
        'hero-gradient': 'linear-gradient(135deg, #F8F4F8 0%, #D8BFD8 100%)',
        'card-gradient': 'linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.9) 100%)',
      },
      animation: {
        'float': 'float 6s ease-in-out infinite',
        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
      },
      keyframes: {
        float: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-20px)' },
        }
      }
    },
  },
  plugins: [],
}
