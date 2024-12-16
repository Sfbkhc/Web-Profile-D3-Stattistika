/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
      spacing: {
        '2s' : '26px'
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      animation: {
        'infinite-scroll': 'infinite-scroll 30s linear infinite',
      },
      keyframes: {
        'infinite-scroll': {
          '0%': { transform: 'translateX(-100%)' },
          '100%': { transform: 'translateX(100%)' },
        },
      },
      clipPath: {
        'parallelogram': 'polygon(20% 0%, 100% 0%, 100% 100%, 0% 100%)',
      },
      colors: {
        'regal-blue': '#243c5a',
        custombg : '#0085BA'
      },
    },
  },
  plugins: 
  [   
    require('preline/plugin'), 
  ],
}
