/** @type {import('tailwindcss').Config} */
module.exports = {

  content: ["./**/*.{html,js,php}", "node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      colors: {
        'primary': '#415DA1',
        'secondary': '#F1F6FF',
        'tertiary': '#e5ebfd',
        'cards': '#FDFDFD',
        'border-blue': '#B1C3F0',
      },
      container: {
        center: true,
      },
      fontFamily: {
        'ubuntu': ['Ubuntu', 'sans-serif'],
        'inter': ['Inter', 'sans-serif'],
      },
      backgroundImage: {
        'fundo-neutro': "url('../../img/fundo-neutro.png')",
        'fundo-azul': "url('../../img/fundo-azul.png')",
      }
    },
  },

  plugins: [ 
    require('flowbite/plugin'),
    require('tailwindcss-animated')
  ],

}