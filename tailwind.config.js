/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'primary': '#415DA1',
        'secondary': '#E6ECF8',
        'namehawkes-blue': '#ECEFF6',
        'pale-cornflower-blue': '#B1C3F0',
      },
      container: {
        center: true,
      },
      fontFamily: {
        'ubuntu': ['Ubuntu', 'sans-serif'],
        'inter': ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
}