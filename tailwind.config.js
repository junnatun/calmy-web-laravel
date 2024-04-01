/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      sans: ["Poppins", "Arial", "sans-serif"],
    },
    extend: {
      fontFamily: {
        poppins: ["Poppins"],
      },
      colors: {
        primary: "#4349FF",
        primaryDark: "#2A2FBA",
        primaryLight: "#A4A7FF",
        black: "#0A0C1C",
        white: "#ffffff",
        grey: "#7C7F9A",
        bgDark: "#0000000D",
      },
      backgroundImage: {
        "main-bg": "url('/public/images/background.svg')",
      },
      dropShadow: {
        lg: "0 10px 8px rgba(67, 73, 255, 0.25)",
      },
    },
  },
  plugins: [],
}

