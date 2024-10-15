/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          'primary': '#1a365d',  // Adjust this to match your logo's main color
        },
      },
    },
    plugins: [],
}
