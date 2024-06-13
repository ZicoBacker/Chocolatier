/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,php}"],
  theme: {
    extend: {
      colors: {
        'custom-beige': '#ffecd4',
        'custom-brown': '#a1745b',
        'custom-orange': '#ffb48c',
        'custom-hover-orange': '#e6a17c',
      },
    },
  },
  plugins: [],
}

