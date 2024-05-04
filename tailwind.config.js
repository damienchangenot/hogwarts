/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      fontFamily: {
        magic: 'Magic',
        lumos: 'Lumos',
        dumbledor: 'Dumbledor',
        base : 'Source Serif Pro'
      },
    },
  },
  plugins: [],
}
