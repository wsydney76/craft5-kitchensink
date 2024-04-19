/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './templates/**/*.twig',
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/typography'),
  ],
}

