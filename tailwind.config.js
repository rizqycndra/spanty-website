/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      cc: '#F6DEE3',
      mc: '#401408',
      sc: '#ffffff',
      bc: '#000000',
      bc2: '#686A79',
      bc3: '#ECECEC',
      bc4: '#FAFAFA',
    },
    letterSpacing: {
      '1': '0em',
      '2': '0.025em',
      '3': '0.05em',
      '4': '0.1em',
    }
  },
  plugins: [],
}

