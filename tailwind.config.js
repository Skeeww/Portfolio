module.exports = {
  darkMode: 'class',
  purge: [
    './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        orange: {
          DEFAULT: '#DB7E28',
          light: '#e19751'
        },
        green: {
          light: '#28DB9B',
          DEFAULT: '#126D4D'
        },
        pink: {
          light: '#e151a0',
          DEFAULT: '#DB2889'
        }
      },
      height: theme => ({
        "screen/2": "50vh",
        "screen/3": "calc(100vh / 3)",
        "screen/4": "calc(100vh / 4)",
        "screen/5": "calc(100vh / 5)"
      })
    },
  },
  variants: {
    display: ["responsive", "hover", "focus"],
    extend: {},
  },
  plugins: [],
}
