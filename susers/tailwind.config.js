/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./build/php/*.{html,php,js}",
    "./build/php/**/*.{html,php,js}",
    "./build/php/**/**/*.{html,php,js}",
    "./build/php/**/**/**/*.{html,php,js}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily:{
      'sans':['Roboto', 'sans-serif']
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin'),
    require('tailwind-scrollbar')
  ],
}

