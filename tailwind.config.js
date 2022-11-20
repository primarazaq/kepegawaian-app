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
        'fade' : 'fade 0.5s ease'
      },
      keyframes: {
        fade: {
          '0%' :{transform: 'scale(0.2,0.2)',
                  opacity: 0, backgroundColor: 'transparent' },
          '100%' :{transform: 'scale(1,1)',
                  opacity: 100, backgroundColor: 'transparent'},
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
