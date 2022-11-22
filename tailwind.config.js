/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      animation: {
        'fade' : 'fade 1s ease'
      },
      keyframes: {
        fade: {
          '0%' :{opacity: 0},
          '100%' :{opacity: 100},
        }
      },
    },
    colors: {
      transparent: "transparent",
      mainclr: "#00A2BA",
      btnprimary: "#FA9E3B",
      red: "#FF3E3E",
      blue: "#3F5EFF",
      slate: "#eaeaea",
      white: "#FFFFFF",
      black: "#000000",
      orange2: "#FF932F",
      grey: "#777777",
      darkfont: "#A7A7A7",
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
