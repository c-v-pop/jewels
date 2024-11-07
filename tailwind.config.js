/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          'main-bg': '#D2E0FB',
          'secondary-bg': '#FEF9D9',
          'primary': '#FEF9D9',
          'secondary': '#DEE5D4',
          'support': '#8EACCD',
          'tertiary': '#87A2FF',
        },
        scale: {
          '200': '2',      // 2x scale
          '250': '2.5',    // 2.5x scale
          '300': '3',      // 3x scale
      },
      },
    },
    plugins: [],
  }