/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/*.{html,js,php}",
  ],
  theme: {
    extend: {
      colors: {
        height: {
          '10.4vh': '10.4vh',
        },
        'primary': '#0d5389', // --color-primary
        'secondary-primary': 'rgb(10, 79, 109)', // --second-primary
        'header': '#239e92', // --color-header
        'font-primary': '#000', // --font-color-primary
        'font-white': '#fff', // --font-color-white
        'font-light': '#545554', // --font-color-light
        'dark-grey': '#202020', // --color-darkgrey
        'pad-background': '#fff', // --pad-background
        'num': '#239e92', // --num
      },
      boxShadow: {
        'custom-shadow': '1.5px 1.5px 2px 1.3px #31313135', // --pad-box-shadow
      },
      borderRadius: {
        'custom-radius': '5px', // --box-borderRadius
      },
    },
  },
  plugins: [],
}
