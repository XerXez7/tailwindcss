module.exports = {
  content: ["./public/**/*.{html,js}"],
  darkMode: 'class',
  theme: {
    container: {
      center: true,
      pading: '16px',
    },
    extend: {
      colors: {
     primary: '#16a34a',
     
     dark: '#1c1917',
    },
  screen: {
    '2xl': '132px',
  },
    },
  },
  plugins: [],
  plugins: [require("daisyui")],
}
