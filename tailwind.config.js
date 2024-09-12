/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
  ],
  theme: {
    extend: {
      boxShadow: {
        'custom-shadow': '1.5px 1.5px 2px 1.3px #31313135',
      },
      borderRadius: {
        'custom-radius': '5px',
      },
    },
  },
  plugins: [],
}
