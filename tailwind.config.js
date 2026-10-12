/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.html', './assets/js/app.js'],
  theme: {
    extend: {
      colors: {
        porcelain: { DEFAULT: '#F2F0EC', 200: '#E4E1DA' },
        navy:      { DEFAULT: '#1B2E4B', 900: '#13223A', 950: '#0B1526' },
        copper:    { DEFAULT: '#A5573C', light: '#E2A98C' },
        ink:       { DEFAULT: '#25282E', 950: '#14161A' },
      },
      fontFamily: {
        display: ['"Bodoni Moda"', 'Didot', 'Georgia', 'serif'],
        sans: ['"DM Sans"', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
};
