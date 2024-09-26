/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'kanit': ['Kanit', 'sans-serif'],
        'suse': ['SUSE', 'sans-serif'],
        'outfit': ['Outfit', 'sans-serif']
      }
    },
  },
  plugins: [],
}

