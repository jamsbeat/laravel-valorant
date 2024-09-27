/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  safelist: [
    'text-red-500',
    'text-blue-500',
    'text-green-500',
  ],
  theme: {
    extend: {
      fontFamily: {
        'kanit': ['Kanit', 'sans-serif'],
        'suse': ['SUSE', 'sans-serif'],
        'outfit': ['Outfit', 'sans-serif'],
        'montserrat': ['Montserrat', 'sans-serif']
      },
      colors: {
        darkblue: '#0e1822',
        reyna: '#b757ad',
      },
    },
  },
  plugins: [],
}

